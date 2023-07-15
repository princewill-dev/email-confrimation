<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavigationController;
use App\Http\Controllers\CodeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/





Route::get('/', [NavigationController::class, 'home'])->name("homepage");

Route::get('/verify', [CodeController::class, 'showForm'])->name("activity.show");

Route::post('/create', [CodeController::class, 'createOtp'])->name("activity.try");

Route::get('/otp_sent/activityId={activityId}', [CodeController::class, 'displayOtp'])->name("activity.get");

Route::post('/recieve_otp', [CodeController::class, 'checkOtp'])->name("activity.submit");

// Route::post('/confirmportal', [CodeController::class, 'confirm_email_function'])->name("confirm_portal");






Route::fallback(function () {
    return view('outer.404');
});