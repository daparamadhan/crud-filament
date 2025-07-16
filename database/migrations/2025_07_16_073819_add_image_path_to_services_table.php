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
        Schema::table('services', function (Blueprint $table) {
            // Tambahkan kolom image_path.
            // Menggunakan ->after('harga') untuk menempatkannya setelah kolom harga (opsional).
            // ->nullable() SANGAT PENTING untuk mempertahankan data lama Anda.
            $table->string('image_path')->nullable()->after('harga');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            // Hapus kolom image_path jika migrasi di-rollback.
            $table->dropColumn('image_path');
        });
    }
};