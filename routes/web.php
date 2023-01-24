<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('/auth/admin-login');
});

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get("/dashboard", function () {
    return view('emp_dashboard');
});
Route::get("/attendance", function () {
    return view('emp_attendance');
});
Route::get("/request", function () {
    return view('emp_request');
});
Route::get("/logout", function () {
    return view('/auth/admin-login');
});

