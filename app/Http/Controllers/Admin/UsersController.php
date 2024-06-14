<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(30);
        return view('admin.users.index')->with('users', $users);
    }

    /**
     * Display a listing of the resource.
     */
    public function students()
    {
        $students = User::where('role', 'user')->paginate(30);
        return view('admin.students.index')->with('students', $students);
    }

    /**
     * Display a listing of the resource.
     */
    public function instructors()
    {
        $instructors = User::where('role', 'instructor')->paginate(30);
        return view('admin.instructors.index')->with('instructors', $instructors);
    }

    public function tr_profile(string $id)
    {
        $instructor = User::with(['courses'])->find($id);
        return view('admin.instructor_profile')->with('instructor', $instructor);
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
        //
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
