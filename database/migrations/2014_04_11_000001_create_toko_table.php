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
        Schema::create('toko', function (Blueprint $table) {
            $table->id('toko_id');
            // $table->unsignedBigInteger('penjual_id');
            $table->string('nama_toko');
            $table->string('nomor_toko');
            $table->unsignedBigInteger('kategori_id');
            $table->string('status_verifikasi');
            // $table->foreign('penjual_id')->references('penjual_id')->on('penjual');
            $table->foreign('kategori_id')->references('kategori_id')->on('kategori');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('toko');
    }
};
