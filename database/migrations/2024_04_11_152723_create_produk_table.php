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
        Schema::create('produk', function (Blueprint $table) {
            $table->id('produk_id');
            $table->unsignedBigInteger('toko_id');
            $table->string('nama_produk');
            $table->decimal('harga', 10, 2);
            $table->integer('stok');
            $table->unsignedBigInteger('kategori_id');
            // $table->unsignedBigInteger('cart_id')->nullable();
            $table->foreign('toko_id')->references('toko_id')->on('toko');
            $table->foreign('kategori_id')->references('kategori_id')->on('kategori');
            // $table->foreign('cart_id')->references('cart_id')->on('cart');
        });;
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};
