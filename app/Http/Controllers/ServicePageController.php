<?php

namespace App\Http\Controllers;

use App\Models\Service;

class ServicePageController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('services', compact('services'));
    }
}
