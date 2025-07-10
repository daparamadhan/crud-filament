<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    use HasFactory;

    // Kolom yang boleh diisi lewat mass-assignment
    protected $fillable = [
        'title',
        'description',
        'image_path',
        'hashtags',
    ];

    // Accessor untuk ambil URL gambar
    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->image_path);
    }
}
