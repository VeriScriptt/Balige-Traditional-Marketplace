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
        $produk = Produk::latest()->paginate(5);

        //render view with posts
        return view('layouts.index', compact('produk'));
    }
}
