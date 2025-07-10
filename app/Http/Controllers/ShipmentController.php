<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shipment;

class ShipmentController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'sender_name'            => 'required|string|max:255',
            'sender_phone'           => 'required|string|max:20',
            'receiver_name'          => 'required|string|max:255',
            'receiver_phone'         => 'required|string|max:20',
            'pickup_time'            => 'nullable|date',
            'estimated_arrival'      => 'nullable|date',
            'ukuran_paket'           => 'required|in:small,medium,large,custom',
            'panjang'                => 'nullable|integer',
            'lebar'                  => 'nullable|integer',
            'tinggi'                 => 'nullable|integer',
            'item_type'              => 'nullable|string|max:100',
            'fragile'                => 'nullable|in:1',
            'insurance'              => 'nullable|in:1',
            'extra_packaging'        => 'nullable|string|max:255',
            'extra_packaging_price'  => 'nullable|numeric',
        ]);

        $validated['fragile'] = $request->has('fragile') ? 1 : 0;
        $validated['insurance'] = $request->input('insurance', 0);
        $validated['kode_pengiriman'] = 'TRK' . strtoupper(uniqid());

        Shipment::create($validated);

        return redirect('/')->with('success', 'Pengiriman berhasil disimpan!');
    }
}
