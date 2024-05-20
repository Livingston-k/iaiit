<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Review;
use App\Models\Comment;
use App\Models\Like;

class GlobalController extends Controller
{
    public function comment(string $id)
    {
        $course = Course::with(['ratings','likes','comments','reviews','lessons','user'])->find($id);
        $request->validate([
            'comment' => ['required'],
        ]);

        Comment::create([
            'comment' => $request->comment,
            'course_id' => $course->id,
            'user_id' => Auth::user()->id,
        ]);

        
        View::firstOrCreate(['course_id' => $course->id, 'user_id' => Auth::id()]);
        return view('student.courses.course')->with('course', $course);
    }

    public function review(string $id)
    {
        $course = Course::with(['ratings','likes','comments','reviews','lessons','user'])->find($id);
        $request->validate([
            'stars' => ['required'],
            'comment' => ['required'],
        ]);

        Review::create([
            'stars' => $request->stars,
            'comment' => $request->comment,
            'course_id' => $course->id,
            'user_id' => Auth::user()->id,
        ]);

        
        View::firstOrCreate(['course_id' => $course->id, 'user_id' => Auth::id()]);
        return view('student.courses.course')->with('course', $course);
    }

    public function like(string $id)
    {
        $course = Course::with(['ratings','likes','comments','reviews','lessons','user'])->find($id);
        Like::firstOrCreate(['course_id' => $course->id, 'user_id' => Auth::id()]);
        View::firstOrCreate(['course_id' => $course->id, 'user_id' => Auth::id()]);
        return view('student.courses.course')->with('course', $course);
    }
}
