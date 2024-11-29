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
    // Mengambil kategori yang dipilih
    $kategoriIds = $request->input('kategori', []);

    // Menyaring produk berdasarkan kategori yang dipilih
    $produk = produk::when(count($kategoriIds) > 0, function ($query) use ($kategoriIds) {
        return $query->whereIn('kategori_id', $kategoriIds);
    })->with('kategori')->get();

    // Mengambil semua kategori untuk ditampilkan di sidebar
    $kategoris = kategori::all();

    // Mengembalikan data ke view
    return view('produk', compact('produk', 'kategoris'));
}
}
