<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['kode_barang', 'nama_barang', 'berat', 'status'];

    protected static function booted()
    {
        static::creating(function ($item) {
            $lastItem = self::orderBy('id', 'desc')->first();
            $number = $lastItem ? ((int)str_replace('BRG-', '', $lastItem->kode_barang) + 1) : 1;
            $item->kode_barang = 'BRG-' . str_pad($number, 4, '0', STR_PAD_LEFT);
        });
    }

    // Tambahkan relasi ke Shipment
    public function shipments()
    {
        return $this->belongsToMany(Shipment::class, 'shipment_item', 'item_id', 'shipment_id');
    }
}
