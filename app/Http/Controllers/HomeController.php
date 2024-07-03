<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Course;
use App\Models\View;
use App\Models\User;
use App\Models\Payment;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $courses = Course::withCount(['ratings','likes','comments','reviews','lessons','user'])->orderBy('created_at', 'DESC')->paginate(25);
        return view('welcome')->with('courses', $courses);
    }

    public function admin()
    {
        $startOfMonth = Carbon::now()->startOfMonth();
        $endOfMonth = Carbon::now()->endOfMonth();

        $payments = Payment::where('confirmed', 1)->whereBetween('created_at', [$startOfMonth, $endOfMonth])->sum('amount');
        $total_payments = Payment::where('confirmed', 1)->sum('amount');
        $courses_count = Course::where('status', 1)->count();
        $courses = Course::where('status', 1)->with('user')->withCount('lessons')->get();

        return view('admin.dashboard')->with([
            'payments' => $payments,
            'total_payments' => $total_payments,
            'courses_count' => $courses_count,
            'courses' => $courses
        ]);
    }

    public function instructor()
    {
        $startOfMonth = Carbon::now()->startOfMonth();
        $endOfMonth = Carbon::now()->endOfMonth();

        $monthAmount = DB::table('payments')
        ->join('courses', 'payments.course_id', '=', 'courses.id')
        ->join('users as instructors', 'courses.added_by', '=', 'instructors.id')
        ->select(DB::raw('sum(payments.amount) as total_amount'))
        ->where('instructors.id', Auth::id())
        ->where('payments.confirmed', 1)
        ->whereBetween('payments.created_at', [$startOfMonth, $endOfMonth])
        ->groupBy('instructors.id')
        ->first();


        $totalAmount = DB::table('payments')
        ->join('courses', 'payments.course_id', '=', 'courses.id')
        ->join('users as instructors', 'courses.added_by', '=', 'instructors.id')
        ->select(DB::raw('sum(payments.amount) as total_amount'))
        ->where('instructors.id', Auth::id())
        ->where('payments.confirmed', 1)
        ->groupBy('instructors.id')
        ->first();

        $courses_count = Course::where('added_by', Auth::id())->count();
        $courses = Course::where('added_by', Auth::id())->withCount('lessons')->get();

        $total_amount = $totalAmount ?? 0;
        $month_amount = $monthAmount ?? 0;

        return view('instructor.dashboard')->with([
            'total_amount' => $total_amount,
            'month_amount' => $month_amount,
            'courses_count' => $courses_count,
            'courses' => $courses
        ]);
    }

    public function user()
    {
        $startOfMonth = Carbon::now()->startOfMonth();
        $endOfMonth = Carbon::now()->endOfMonth();

        $payments = Payment::where('user_id', Auth::id())->where('confirmed', 1)->whereBetween('created_at', [$startOfMonth, $endOfMonth])->sum('amount');
        $total_courses = Payment::where('user_id', Auth::id())->where('confirmed', 1)->distinct('course_id')->count('course_id');
        $paidCourses = Course::join('payments', 'courses.id', '=', 'payments.course_id')->where('payments.user_id', Auth::id())->where('payments.confirmed', 1)->select('courses.*')->distinct()->get();

        return view('user.dashboard')->with(['payments' => $payments, 'total_courses' => $total_courses, 'paidCourses' => $paidCourses]);
    }

    public function courses()
    {
        $courses = Course::withCount(['ratings','likes','comments','reviews','lessons','user'])->orderBy('created_at', 'DESC')->paginate(100);
        return view('courses')->with('courses', $courses);
    }

    public function instructors()
    {
        $instructors = User::where('role', 'instructor')->orderBy('created_at', 'DESC')->paginate(50);
        return view('instructors')->with('instructors', $instructors);
    }
}
