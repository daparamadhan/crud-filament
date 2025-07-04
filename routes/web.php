<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

// AUTH
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// PAGE
Route::get('/registrasi', function () { return view('registrasi'); })->name('registrasi');
Route::get('/services', function () { return view('services'); })->name('services');
Route::get('/about', function () { return view('about'); })->name('about');
Route::get('/contact', function () { return view('contact'); })->name('contact');
Route::get('/track', function () { return view('track'); })->name('track');

//LOGIN
Route::post('/login', [LoginController::class, 'dologin'])->name('login.dologin');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
