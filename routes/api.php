<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('student')->name('student.')->middleware(['auth','user'])->group(function () {
    Route::post('/payment/check_status', [PaymentController::class, 'check_status'])->name('check_status');
});
