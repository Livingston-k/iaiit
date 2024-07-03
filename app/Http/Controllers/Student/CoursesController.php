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

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::withCount(['ratings','likes','comments','reviews','lessons','user'])->orderBy('created_at', 'DESC')->get();
        return view('student.courses.index')->with('courses', $courses);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $course = Course::with(['ratings','likes','comments','reviews','lessons','user'])->find($id);
        View::firstOrCreate(['course_id' => $course->id, 'user_id' => Auth::id()]);
        return view('student.courses.course')->with('course', $course);
    }

    
    
    public function instructor_profile(string $id)
    {
        $instructor = User::with(['courses'])->find($id);
        return view('student.instructor_profile')->with('instructor', $instructor);
    }
}
