<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
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
}
