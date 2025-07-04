<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Item;

class Shipment extends Model
{
    protected $fillable = ['kode_pengiriman', 'asal', 'tujuan', 'ongkir', 'status'];
    // atau kalau mau auto semua:
    // protected $guarded = [];

    protected static function booted()
    {
        static::creating(function ($shipment) {
            $lastShipment = self::orderBy('id', 'desc')->first();
            $number = $lastShipment ? ((int)str_replace('SHP-', '', $lastShipment->kode_pengiriman) + 1) : 1;
            $shipment->kode_pengiriman = 'SHP-' . str_pad($number, 4, '0', STR_PAD_LEFT);
        });
    }

    public function items()
    {
        return $this->belongsToMany(Item::class, 'shipment_item');
    }
}
