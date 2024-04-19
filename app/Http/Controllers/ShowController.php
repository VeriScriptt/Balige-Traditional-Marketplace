<?php

namespace App\Http\Controllers;

use App\Models\Produk;

use Illuminate\View\View;

use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function index(): View
    {
        //get produks
        $produk = Produk::all();

        //render view with posts
        return view('layouts.index', compact('produk'));
        // return view('layouts.index')->with('produk', $produk);

    }
}
