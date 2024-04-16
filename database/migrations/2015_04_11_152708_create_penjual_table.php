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
        Schema::create('penjual', function (Blueprint $table) {
            $table->id('penjual_id');
            $table->unsignedBigInteger('user_id');
            $table->string('nama_penjual');
            $table->unsignedBigInteger('toko_id')->nullable();
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->foreign('toko_id')->references('toko_id')->on('toko');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjual');
    }
};
