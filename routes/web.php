<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'instructor'])->name('instructor');

Route::prefix('instructors')->name('instructors.')->group(function () {
    Route::resource('courses', App\Http\Controllers\Instructor\CoursesController::class);
    Route::resource('quizzes', App\Http\Controllers\Instructor\QuizzesController::class);
    Route::resource('earnings', App\Http\Controllers\Instructor\EarningsController::class);
});

