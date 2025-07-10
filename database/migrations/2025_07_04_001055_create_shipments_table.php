<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pengiriman')->unique();

            // Detail pengirim & penerima
            $table->string('sender_name');
            $table->string('sender_phone');
            $table->string('receiver_name');
            $table->string('receiver_phone');

            // Jadwal pengambilan & estimasi tiba
            $table->dateTime('pickup_time')->nullable();
            $table->dateTime('estimated_arrival')->nullable();

            // Ukuran paket
            $table->enum('ukuran_paket', ['small', 'medium', 'large', 'custom'])->default('small');
            $table->integer('panjang')->nullable(); // khusus custom
            $table->integer('lebar')->nullable();
            $table->integer('tinggi')->nullable();

            // Barang dan opsi tambahan
            $table->string('item_type')->nullable();
            $table->boolean('fragile')->default(false);
            $table->boolean('insurance')->default(false);

            // Extra packaging
            $table->string('extra_packaging')->nullable();
            $table->integer('extra_packaging_price')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipments');
    }
};
