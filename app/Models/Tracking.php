<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    use HasFactory;

    protected $fillable = ['shipment_id', 'lokasi', 'keterangan', 'waktu'];

    public function shipment()
    {
        return $this->belongsTo(Shipment::class);
    }
}
