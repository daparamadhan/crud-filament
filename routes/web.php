<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ServicePageController;

Route::get('/', function () {
    return view('welcome');
});

// AUTH
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// PAGE
Route::get('/registrasi', function () { return view('registrasi'); })->name('registrasi');
Route::get('/about', function () { return view('about'); })->name('about');
Route::get('/contact', function () { return view('contact'); })->name('contact');
Route::get('/track', function () { return view('track'); })->name('track');

// Services page (pakai Controller)
Route::get('/services', [ServicePageController::class, 'index']);

// LOGIN
Route::post('/login', [LoginController::class, 'dologin'])->name('login.dologin');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
