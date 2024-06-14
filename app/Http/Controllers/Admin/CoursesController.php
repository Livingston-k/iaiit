<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\View;
use App\Models\User;
use App\Models\Comment;

class CoursesController extends Controller
{
/**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::withCount(['ratings','likes','comments','reviews','lessons','user'])->orderBy('created_at', 'DESC')->get();
        return view('admin.courses.index')->with('courses', $courses);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $course = Course::with(['ratings','likes','comments','reviews','lessons','user'])->find($id);
        $lesson = $course->lessons[0];
        return view('admin.courses.course')->with([
            'course' => $course,
            'lesson' => $lesson,
        ]);
    }

    public function change_course_lesson(string $id)
    {
        $lesson = Lesson::find($id);
        $course = Course::with(['ratings','likes','comments','reviews','lessons','user'])->find($lesson->course_id);
        return view('admin.courses.course')->with([
            'course' => $course,
            'lesson' => $lesson,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
