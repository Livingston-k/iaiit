<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\View;
use App\Models\User;

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
        return view('admin.dashboard');
    }

    public function instructor()
    {
        return view('instructor.dashboard');
    }

    public function user()
    {
        return view('user.dashboard');
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
