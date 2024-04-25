<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SesiController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


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
})->name('shop_detail');

Route::get('toko', function () {
    return view('layouts.toko');
})->name('toko');

Route::get('cart', function () {
    return view('layouts.cart'); // Mengarahkan ke view 'layouts.cart'
})->name('cart'); // Memberikan nama 'cart' pada rute ini

Route::get('checkout', function () {
    return view('layouts.checkout');
})->name('checkout');

Route::get('thankyou', function () {
    return view('layouts.thankyou');
})->name('thankyou');


// Route::get('/produk', [\App\Http\Controllers\ShowController::class,'index']);

Route::resource('/', ShowController::class);

Route::get('rumah',[SesiController::class,'index']);
















require __DIR__.'/auth.php';
