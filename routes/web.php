<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layouts.index');
});
Route::get('index', function () {
    return view('layouts.index');
})->name('home');
Route::get('about', function () {
    return view('layouts.about');
})->name('about');
Route::get('contact', function () {
    return view('layouts.contact');
})->name('contact');
Route::get('shop', function () {
    return view('layouts.shop');
})->name('shop');
Route::get('shop_detail', function () {
    return view('layouts.shop_detail');
});
Route::get('cart', function () {
    return view('layouts.cart'); // Mengarahkan ke view 'layouts.cart'
})->name('cart'); // Memberikan nama 'cart' pada rute ini

Route::get('checkout', function () {
    return view('layouts.checkout');
})->name('checkout');

Route::get('thankyou', function () {
    return view('layouts.thankyou');
})->name('thankyou');


