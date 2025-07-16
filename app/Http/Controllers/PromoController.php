<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promo; // Asumsi Anda punya model Promo untuk carousel
use App\Models\Service; // <-- TAMBAHKAN INI

class PromoController extends Controller
{
    public function index()
    {
        // Ambil data promo untuk carousel (jika ada)
        $promos = Promo::all(); // Sesuaikan jika Anda hanya ingin beberapa promo

        // Ambil data layanan untuk bagian "Our Services"
        // Misalnya, 6 layanan teratas, atau semua jika tidak terlalu banyak
        $services = Service::latest()->take(6)->get(); // Atau Service::all();

        // Kirim kedua data ke view 'welcome'
        return view('welcome', compact('promos', 'services'));
    }
}