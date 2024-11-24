<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Models\produk;


// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/index', function () {
//     return view('index');
// });
// Route::get('/produk', function () {
//     return view('produk');
// });
// Route::get('/keranjang', function () {
//     return view('keranjang');
// });
Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');

// Jika kamu ingin menambahkan fitur filter untuk produk, kamu bisa buat route ini:
Route::get('/produk/filter', [ProdukController::class, 'filter'])->name('produk.filter');