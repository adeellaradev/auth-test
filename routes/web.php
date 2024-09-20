<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.register');
})->name('home');
//GET ROUTE
Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
//POST ROUTE
Route::post('/register', [AuthController::class, 'register'])->name('auth.register-store');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login-store');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
