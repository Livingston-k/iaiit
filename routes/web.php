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
Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'user'])->middleware(['auth','verified','user'])->name('dashboard');
Route::get('admin/dashboard', [App\Http\Controllers\HomeController::class, 'admin'])->middleware(['auth','verified','admin'])->name('admin');
Route::get('instructor/dashboard', [App\Http\Controllers\HomeController::class, 'instructor'])->middleware(['auth','verified','instructor'])->name('instructor');

Route::prefix('instructor')->name('instructor.')->middleware(['auth','instructor'])->group(function () {
    Route::resource('courses', App\Http\Controllers\Instructor\CoursesController::class);
    Route::resource('quizzes', App\Http\Controllers\Instructor\QuizzesController::class);
    Route::resource('earnings', App\Http\Controllers\Instructor\EarningsController::class);
});