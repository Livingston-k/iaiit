<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');
Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'user'])->middleware(['auth','verified','user'])->name('student');
Route::get('admin/dashboard', [App\Http\Controllers\HomeController::class, 'admin'])->middleware(['auth','verified','admin'])->name('admin');
Route::get('instructor/dashboard', [App\Http\Controllers\HomeController::class, 'instructor'])->middleware(['auth','verified','instructor'])->name('instructor');

Route::prefix('admin')->name('admin.')->middleware(['auth','admin'])->group(function () {
    Route::resource('languages', App\Http\Controllers\Admin\LanguageController::class);
});

Route::prefix('instructor')->name('instructor.')->middleware(['auth','instructor'])->group(function () {
    Route::get('add_lesson/{id}', [App\Http\Controllers\Instructor\CoursesController::class, 'add_lesson'])->name('add_lesson');
    Route::resource('courses', App\Http\Controllers\Instructor\CoursesController::class);
    Route::resource('quizzes', App\Http\Controllers\Instructor\QuizzesController::class);
    Route::resource('earnings', App\Http\Controllers\Instructor\EarningsController::class);
});

Route::prefix('student')->name('student.')->middleware(['auth','user'])->group(function () {
    Route::resource('courses', App\Http\Controllers\Student\CoursesController::class);
});