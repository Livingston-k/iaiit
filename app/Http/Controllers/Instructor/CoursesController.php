<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;
use App\Models\Course;
use App\Models\Lesson;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::orderBy('created_at', 'DESC')->get();
        return view('instructor.courses.index')->with('courses', $courses);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('instructor.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'caption' => ['required'],
            'language' => ['required'],
            'image' => ['required'],
            'price' => ['required'],
            'description' => ['required'],
        ]);

        if (!empty($request->image)) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move(public_path('uploads/courses/'), $filename);
            $data['image'] = 'public/uploads/courses/' . $filename;
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
        return redirect()->route('instructor.courses.index')->with('success', 'Course created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $course = Course::with(['ratings','likes','comments','reviews','lessons','user'])->find($id);
        return view('instructor.courses.course')->with('course', $course);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function add_lesson(string $id)
    {
        $course = Course::find($id);
        return view('instructor.courses.add_lesson')->with('course', $course);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store_lesson(Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'course_id' => ['required'],
            'what_to_learn' => ['required'],
            'video' => ['required'],
            'thumbnail' => ['required'],
        ]);

        if (!empty($request->video)) {
            $file = $request->file('video');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move(public_path('uploads/lessons/videos'), $filename);
            $data['video'] = 'public/uploads/lessons/videos/' . $filename;
        }

        if (!empty($request->thumbnail)) {
            $image = $request->file('thumbnail');
            $extension = $image->getClientOriginalExtension();
            $imageName = time() . '.' . $extension;
            $image->move(public_path('uploads/lessons/thumbnails'), $imageName);
            $data['thumbnail'] = 'public/uploads/lessons/thumbnails/' . $imageName;
        }

        Lesson::create([
            'title' => $request->title,
            'course_id' => $request->course_id,
            'video_url' => $filename,
            'thumbnail' => $imageName,
            'added_by' => Auth::user()->id,
            'description' => $request->what_to_learn,
        ]);
        return $this->show($request->course_id);
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
