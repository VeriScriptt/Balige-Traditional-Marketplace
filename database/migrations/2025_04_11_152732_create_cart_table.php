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
        Schema::create('cart', function (Blueprint $table) {
            $table->id('cart_id');
            $table->unsignedBigInteger('pembeli_id');
            $table->unsignedBigInteger('produk_id');
            $table->integer('jumlah_produk');
            $table->unsignedBigInteger('transaksi_id')->nullable();
            // $table->foreign('pembeli_id')->references('pembeli_id')->on('pembeli');
            // $table->foreign('produk_id')->references('produk_id')->on('produk');
            // $table->foreign('transaksi_id')->references('transaksi_id')->on('transaksi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart');
    }
};
