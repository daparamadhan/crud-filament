<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Service extends Model
{
    protected $fillable = [
        'nama_service',
        'deskripsi',
        'harga',
        'image_path',
    ];

    // Optional: tambahkan accessor agar bisa pakai $service->image_url
    protected function imageUrl(): Attribute
    {
        return Attribute::get(function () {
            return $this->image_path
                ? asset('storage/' . $this->image_path)
                : asset('/icons/flash.svg');
        });
    }
}
