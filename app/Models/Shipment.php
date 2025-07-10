<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    protected $fillable = [
    'kode_pengiriman', 'sender_name', 'sender_phone',
    'receiver_name', 'receiver_phone', 'pickup_time', 'estimated_arrival',
    'ukuran_paket', 'panjang', 'lebar', 'tinggi',
    'item_type', 'fragile', 'insurance',
    'extra_packaging', 'extra_packaging_price'
];


    protected static function booted()
    {
        static::creating(function ($shipment) {
            $lastShipment = self::orderBy('id', 'desc')->first();
            $number = $lastShipment ? ((int)str_replace('SHP-', '', $lastShipment->kode_pengiriman) + 1) : 1;
            $shipment->kode_pengiriman = 'SHP-' . str_pad($number, 4, '0', STR_PAD_LEFT);
        });
    }
} 
