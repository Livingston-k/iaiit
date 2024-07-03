<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\View;
use App\Models\User;
use App\Models\Comment;
use App\Models\Payment;

class LessonsController extends Controller
{
    public function enroll(string $id)
    {
        $course = Course::with(['ratings', 'likes', 'comments', 'reviews', 'lessons', 'user'])->find($id);
        if (!$course) {
            return redirect()->route('student.courses.index')->with('error', 'Course not found.');
        }

        $lesson = $course->lessons->first();
        return redirect()->route('student.change_lesson', ['id' => $lesson->id]);
    }


    public function change_lesson(string $id)
    {
        $lesson = Lesson::find($id);
        $course = Course::with(['ratings','likes','comments','reviews','lessons','user'])->find($lesson->course_id);
        $payment = Payment::where('user_id', Auth::user()->id)->where('course_id', $id)->where('confirmed', 1)->get();

        if (count($payment) > 0) {
            View::firstOrCreate(['course_id' => $course->id, 'user_id' => Auth::id()]);
            return view('student.courses.lesson')->with([
                'course' => $course,
                'lesson' => $lesson,
            ]);
        } else {
            return redirect()->route('student.course_payment', ['id' => $course->id]);
        }

        // $lesson = Lesson::find($id);
        // if (!$lesson) {
        //     return redirect()->route('student.courses.index')->with('error', 'Lesson not found.');
        // }
        // $course = Course::with(['ratings', 'likes', 'comments', 'reviews', 'lessons', 'user'])->find($lesson->course_id);
        
        // if (!$course) {
        //     return redirect()->route('some.error.route')->with('error', 'Course not found.');
        // }

        // $payment = Payment::where('user_id', Auth::user()->id)->where('course_id', $course->id)->exists();

        // if ($payment) {
        //     View::firstOrCreate(['course_id' => $course->id, 'user_id' => Auth::id()]);
        //     return view('student.courses.lesson')->with([
        //         'course' => $course,
        //         'lesson' => $lesson,
        //     ]);
        // } else {
        //     return redirect()->route('student.enroll', ['id' => $course->id]);
        // }
    }

    public function comment(Request $request)
    {
        $request->validate([
            'comment' => ['required'],
            'course' => ['required'],
        ]);

        Comment::create([
            'comment' => $request->comment,
            'course_id' => $request->course,
            'user_id' => Auth::user()->id,
        ]);
        
        $course = Course::with(['ratings','likes','comments','reviews','lessons','user'])->find($request->course);
        View::firstOrCreate(['course_id' => $course->id, 'user_id' => Auth::id()]);
        return view('student.courses.course')->with('course', $course);
    }
}
