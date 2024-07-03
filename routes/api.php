<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('student')->name('student.')->group(function () {
    Route::post('/payment/check_status', [App\Http\Controllers\Student\PaymentsController::class, 'check_status'])->name('check_status');
    Route::get('course/lesson/{id}', [App\Http\Controllers\Student\LessonsController::class, 'change_lesson'])->name('change_lesson');
});
