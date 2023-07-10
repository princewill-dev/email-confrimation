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

Route::get('/', [NavigationController::class, 'home_link_function'])->name("homepage");

Route::get('/verify', [CodeController::class, 'verify_page_function'])->name("verify_age");

Route::post('/verifyportal', [CodeController::class, 'verify_email_function'])->name("verify_portal");

Route::get('/confirm', [CodeController::class, 'confirm_otp_function'])->name("confirm_otp_page");






Route::fallback(function () {
    return view('outer.404');
});