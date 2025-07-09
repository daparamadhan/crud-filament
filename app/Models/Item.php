<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['nomor_resi', 'nama_barang', 'berat', 'status'];

    protected static function booted()
    {
        static::creating(function ($item) {
            $lastItem = self::orderBy('id', 'desc')->first();
            $number = 1;

            if ($lastItem && $lastItem->nomor_resi) {
                $lastNumber = (int) str_replace('BRG-', '', $lastItem->nomor_resi);
                $number = $lastNumber + 1;
            }

            $item->nomor_resi = 'BRG-' . str_pad($number, 4, '0', STR_PAD_LEFT);
        });
    }

    public function shipments()
    {
        return $this->belongsToMany(Shipment::class, 'shipment_item', 'item_id', 'shipment_id');
    }
}
