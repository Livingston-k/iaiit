<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\View;
use App\Models\Course;
use App\Models\Payment;
use App\Models\Country;

class PaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payments = Course::where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
        return view('student.payments.index')->with('courses', $payments);
    }


    public function course_payment(string $id)
    {
        $countries = Country::all();
        $course = Course::find($id);
        View::firstOrCreate(['course_id' => $course->id, 'user_id' => Auth::id()]);
        return view('student.payments.create')->with(['course' => $course, 'countries' => $countries]);
    }

    public  function currencyExchange($USD, $currency)
    {
        $exchangeRates = array(
            "UGX" => 3745.93,
            "KES" => 147.25,
        );

        // Check if the provided $currency is in $exchangeRates
        if (!array_key_exists($currency, $exchangeRates)) {
            return null; // Return null for unsupported currencies
        }

        $exchangeRate = $exchangeRates[$currency];

        // Calculate the equivalent amount in the specified currency
        $result = $USD * $exchangeRate;

        // Round to 2 decimal points and cast to a float
        return round($result, 2);
    }

    
    public function subscribe(Request $request)
    {
        $request->validate([
            'country' => ['required'],
            'course' => ['required'],
            'phone' => ['required'],
        ]);

        $course = Course::find($request->course);
        $course_id = $course->id;
        $course_title = $course->title;
        $course_price = $course->price;
        
        $country_id = $request->country;
        $country = Country::find($country_id);
        $dial_code = $country->dial_code;
        $currency_code = $country->currency_code;

        $amount =  $this->currencyExchange($course_price, $currency_code);


        if ($country_id == 193 || $country_id == 87) {
            $phone = substr($request->phone, -9);
            $phoneNumber = $dial_code . $phone;

            $random_identity = date("Ymdhis") . "giit" . time();
            return $this->callJpesaApi($phoneNumber, $amount, $random_identity, $course_title, $course_id, $currency_code);
        } else {
            return response()->json(['message' => 'Your country is currently not supported'], 501);
        }
    }


    function callJpesaApi($phone, $amount, $random_identity, $course_title, $course_id, $currency_code)
    {
        $user_id = Auth::user()->id;
        // Deduct money
        $DATA   =   '<?xml version="1.0" encoding="ISO-8859-1"?>
        <g7bill>
            <_key_>' . config("services.jpesa.account_key") . '</_key_>
            <cmd>account</cmd>
            <action>credit</action>
            <pt>mm</pt>
            <mobile>' . $phone . '</mobile>
            <amount>' . $amount . '</amount>
            <callback>https://api.statepos.com/api/subscribe_ipn</callback>
            <tx>' . $random_identity . '</tx>
            <description>GIIT Course Payment Of Course ' . $course_title . '</description>
        </g7bill>';

        $ch 	= 	curl_init();		
        curl_setopt($ch, CURLOPT_URL,"https://my.jpesa.com/api/");
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$DATA);
        curl_setopt($ch, CURLOPT_HTTPHEADER,array("Content-Type: text/xml")); 
        curl_setopt($ch, CURLOPT_HEADER,false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,0);
        curl_setopt($ch, CURLOPT_TIMEOUT,400);
        $return = curl_exec($ch);
        curl_close($ch);



        $array = json_decode($return, true);
        // dd($array);

        if ($array['api_status'] == "success") {
            $sub = Payment::create([
                'course_id' => $course_id,
                'amount' => $amount,
                'user_id' => $user_id,
                'random_identity' => $random_identity,
                'currency_code' => $currency_code,
                'api_status' => $array['api_status'],
                'tid' => $array['tid'],
                'memo' => $array['memo'],
                'msg' => $array['msg'],
            ]);
            return view('student.payments.status')->with('subscribe_id', $sub->id);
            // return response()->json(['message' => 'Check Your phone to confirm transaction', 'id' => $sub->id], 200);
        }
        return response()->json(['message' => 'Can not process payment now, please try again later'], 501);
    }


    public function processIPN(Request $request)
    {
        $tid = $request->input('tid');
        $status = $request->input('status');
        $memo = $request->input('memo');
        $random_identity = $request->input('ref');

        if ($status == "approved") {
            DB::transaction(function () use ($tid, $memo, $random_identity) {

                // Update the 'payment' table
                Payment::where('tid', $tid)
                    ->where('memo', $memo)
                    ->where('random_identity', $random_identity)
                    ->update(['confirmed' => 1]);
            });

            return response()->json(['message' => 'Thank You'], 200);
        } else {
            // Update the 'subscribes' table for non-approved status
            Payment::where('tid', $tid)
                ->where('memo', $memo)
                ->where('random_identity', $random_identity)
                ->update(['confirmed' => 2]);
        }
    }

    public function check_status(Request $request)
    {
        $payment = Payment::find($request->subscribe_id);
        return response()->json(['status'=> $subscribe->confirmed], 200);
    }
}
