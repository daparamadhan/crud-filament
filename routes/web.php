<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ServicePageController;
use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\PromoController; 

//  HALAMAN UTAMA 
Route::get('/', [PromoController::class, 'index'])->name('home');

//  AUTH
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'dologin'])->name('login.dologin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout.post');

//  HALAMAN STATIC (tanpa database)
Route::view('/registrasi', 'registrasi')->name('registrasi');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::view('/shipment', 'shipment')->name('shipment');

//  SERVICES (mengambil dari database)
Route::get('/services', [ServicePageController::class, 'index'])->name('services');

//  SHIPMENT (untuk input dan list pengiriman)
Route::get('/shipments', [ShipmentController::class, 'index'])->name('shipments.index');
Route::post('/shipments', [ShipmentController::class, 'store'])->name('shipments.store');
