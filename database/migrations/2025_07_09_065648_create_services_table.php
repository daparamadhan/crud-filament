<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('nama_service');
            $table->text('deskripsi')->nullable();
            $table->decimal('harga', 10, 2);
            $table->string('image_path')->nullable(); // Kolom untuk menyimpan path gambar/icon
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
