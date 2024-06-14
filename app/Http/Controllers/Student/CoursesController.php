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
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'title' => ['required'],
            'caption' => ['required'],
            'language' => ['required'],
            'image' => ['required'],
            'price' => ['required'],
            'description' => ['required'],
        ]);

        // dd($request);

        

        if (!empty($request->image)) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move(public_path('uploads/'), $filename);
            $data['image'] = 'public/uploads/images/' . $filename;
        }

        Course::create([
            'title' => $request->title,
            'caption' => $request->caption,
            'language' => $request->language,
            'image' => $filename,
            'price' => $request->price,
            'added_by' => Auth::user()->id,
            'description' => $request->description,
        ]);
        return redirect()->route('student.courses.index')->with('success', 'Course created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $course = Course::with(['ratings','likes','comments','reviews','lessons','user'])->find($id);
        $lesson = $course->lessons[0];
        View::firstOrCreate(['course_id' => $course->id, 'user_id' => Auth::id()]);
        return view('student.courses.course')->with([
            'course' => $course,
            'lesson' => $lesson,
        ]);
    }

    public function change_lesson(string $id)
    {
        $lesson = Lesson::find($id);
        $course = Course::with(['ratings','likes','comments','reviews','lessons','user'])->find($lesson->course_id);
        View::firstOrCreate(['course_id' => $course->id, 'user_id' => Auth::id()]);
        return view('student.courses.course')->with([
            'course' => $course,
            'lesson' => $lesson,
        ]);
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
    
    public function instructor_profile(string $id)
    {
        $instructor = User::with(['courses'])->find($id);
        return view('student.instructor_profile')->with('instructor', $instructor);
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
