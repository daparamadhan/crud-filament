<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('trackings', function (Blueprint $table) {
        $table->id();
        $table->foreignId('shipment_id')->constrained()->onDelete('cascade');
        $table->string('lokasi');
        $table->string('keterangan');
        $table->timestamp('waktu');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trackings');
    }
};
