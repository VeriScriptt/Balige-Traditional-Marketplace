<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'produk_id';
    public $timestamps = false;

    protected $fillable = [
        'toko_id',
        'nama_produk',
        'harga',
        'stok',
        'kategori_id',
    ];

    // Define relationships here if any
}
