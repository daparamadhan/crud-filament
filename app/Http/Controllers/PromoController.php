<?php

namespace App\Http\Controllers;

use App\Models\Promo;

class PromoController extends Controller
{
    public function index()
    {
        $promos = Promo::latest()->get(); // ambil semua promo, urut terbaru
        return view('welcome', compact('promos')); // lempar ke view welcome.blade.php
    }
}
