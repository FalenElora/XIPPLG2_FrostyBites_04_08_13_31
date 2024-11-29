<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;



// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/index', function () {
//     return view('index');
// });
// Route::get('/produk', function () {
//     return view('produk');
// });
Route::get('/keranjang', function () {
    return view('keranjang');
});

Route::middleware('guest',)->group(function () {
    Route::get('/registrasi', [AuthController::class,'tampilRegistrasi'])->name('registrasi.tampil');
    Route::post('/registrasi/submit', [AuthController::class,'submitRegistrasi'])->name('registrasi.submit');
    Route::get('/login', [AuthController::class,'tampilLogin'])->name('login');
    Route::post('/login/submit', [AuthController::class,'submitLogin'])->name('login.submit');

});


Route::post('/logout', [AuthController::class,'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class,'home'])->name('home');
    Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
    
    Route::get('/produk/filter', [ProdukController::class, 'filter'])->name('produk.filter');
    Route::post('/cart/add/{id}', [CartController::class, 'addToCart'])->name('cart.add');
    Route::post('/cart/tambah/{id}', [CartController::class, 'do_tambah_cart'])->name('cart.tambah');
    Route::get('/cart/tambah/{id}', [CartController::class, 'do_tambah_cart'])
    ->where('id', '[0-9]+');
    Route::get('/cart', [CartController::class, 'cart'])->name('cart');
    Route::post('/cart/remove-all', [CartController::class, 'removeAll'])->name('cart.removeAll');
    Route::post('/cart/add/{id}', [CartController::class, 'addQuantity'])->name('cart.addQuantity');
    Route::post('/cart/decrease/{id}', [CartController::class, 'decreaseQuantity'])->name('cart.decreaseQuantity');
    Route::post('/checkout', [CartController::class, 'checkout'])->name('checkout');

     

   
});
