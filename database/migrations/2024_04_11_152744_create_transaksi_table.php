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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id('transaksi_id');
            $table->unsignedBigInteger('pembeli_id');
            $table->unsignedBigInteger('cart_id');
            $table->decimal('total_harga', 10, 2);
            $table->date('tanggal_transaksi');
            $table->unsignedBigInteger('id_history')->nullable();
            // $table->foreign('pembeli_id')->references('pembeli_id')->on('pembeli');
            // $table->foreign('cart_id')->references('cart_id')->on('cart');
            // $table->foreign('id_history')->references('id_history')->on('history_pembelian');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
