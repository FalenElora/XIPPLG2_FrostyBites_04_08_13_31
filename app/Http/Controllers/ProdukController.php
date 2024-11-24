<?php

namespace App\Http\Controllers;
use App\Models\kategori;
use App\Models\produk;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        // Ambil semua kategori dan produk
        $kategoris = kategori::all(); // Ambil semua kategori
        $produk = produk::with('kategori')->get(); // Ambil produk dengan kategori

        // Mengirimkan produk dan kategori ke view
        return view('produk', compact('produk', 'kategoris'));
    }

     // Fungsi untuk menyaring produk berdasarkan kategori yang dipilih
    // Fungsi untuk menyaring produk berdasarkan kategori yang dipilih
    public function filter(Request $request)
    {
        // Mengambil kategori yang dipilih oleh user
        $kategoriIds = $request->input('kategori', []);

        // Menyaring produk berdasarkan kategori yang dipilih
        $produk = produk::when(count($kategoriIds) > 0, function ($query) use ($kategoriIds) {
            return $query->whereIn('kategori_id', $kategoriIds);
        })->get();

        // Mengambil data kategori untuk ditampilkan di view
        $kategoris = kategori::all();

        // Mengirim data ke view produk.blade.php
        return view('produk', compact('produk', 'kategoris'));
    }
}
