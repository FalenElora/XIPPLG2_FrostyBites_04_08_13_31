<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\produk;
use App\Models\Transaction;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function show($id)
{
    $produk = Produk::findOrFail($id); // Ambil satu produk berdasarkan ID
    return view('produk', compact('produk'));
}
   // Menambahkan produk ke keranjang public function add(Request $request)
    

   public function do_tambah_cart($id)
{

       // Ambil data produk berdasarkan ID
    $produk = Produk::findOrFail($id);

    // Ambil data keranjang dari session
    $cart = session()->get('cart', []);

    // Periksa apakah produk sudah ada di keranjang
    if (isset($cart[$id])) {
        // Jika produk sudah ada, tambah jumlahnya
        $cart[$id]['jumlah_barang'] += 1;
    } else {
        // Jika produk belum ada, tambahkan produk baru ke keranjang
        $cart[$id] = [
            'id' => $produk->id,
            'nama_produk' => $produk->name,  // Nama produk
            'foto_produk' => $produk->photo,  // Foto produk
            'harga' => $produk->harga,  // Harga produk
            'jumlah_barang' => 1,  // Set jumlah awal ke 1
        ];
    }

    // Simpan kembali data keranjang ke session
    
    session()->put('cart', $cart);

    return redirect()->route('cart');
    
}

public function cart()
{
    // Ambil data produk yang ada di keranjang, misalnya menggunakan session
    $cartItems = session('cart', []);
    $produk = Produk::whereIn('id', array_keys($cartItems))->get();
    

    // Inisialisasi subtotal
    $subtotal = 0;

    // Menghitung subtotal berdasarkan produk dan jumlahnya di keranjang
    foreach ($produk as $item) {
        if (isset($cartItems[$item->id])) {
            $subtotal += $item->harga * $cartItems[$item->id]['jumlah_barang'];
        }
    }

    // Nilai tetap untuk Shipping Fees dan Taxes
    $shippingFees = 15000; // Biaya pengiriman tetap
    $taxes = 4000; // Pajak tetap

    // Menghitung total
    $total = $subtotal + $shippingFees + $taxes;


    // Kirim data ke view
    return view('keranjang', compact('produk', 'cartItems', 'subtotal', 'shippingFees', 'taxes', 'total'));
}


// CartController.php
public function removeAll()
{
    // Menghapus semua data di session keranjang
    session()->forget('cart');

    return redirect()->route('cart');
}

public function addQuantity($id)
{
    // Ambil data keranjang dari session
    $cart = session()->get('cart', []);

    // Jika produk ada di keranjang, tambahkan jumlahnya
    if (isset($cart[$id])) {
        $cart[$id]['jumlah_barang'] += 1;
    }

    // Simpan kembali data keranjang ke session
    session()->put('cart', $cart);

    return redirect()->route('cart');
}
public function decreaseQuantity($id)
{
     // Ambil data keranjang dari session
   $cart = session()->get('cart', []);

   // Periksa apakah produk ada di keranjang
   if (isset($cart[$id])) {
       // Jika jumlah produk lebih dari 1, kurangi jumlahnya
       if ($cart[$id]['jumlah_barang'] > 1) {
           $cart[$id]['jumlah_barang'] -= 1;
       } else {
           // Jika jumlahnya 1, hapus produk dari keranjang
           unset($cart[$id]);
       }

       
   }

   // Simpan kembali data keranjang ke session
   session()->put('cart', $cart);

   return redirect()->route('cart');
}

public function checkout(Request $request)
{
    $cartItems = session()->get('cart', []);

    if (empty($cartItems)) {
        return redirect()->route('cart')->with('error', 'Keranjang Anda kosong.');
    }

    // Validasi input data
    $validated = $request->validate([
        'name' => 'required|string',
        'phone' => 'required|string',
        'address' => 'required|string',
    ]);

    // Simpan data order ke database
    $order = Order::create([
        'name' => $request->input('name'),
        'phone' => $request->input('phone'),
        'address' => $request->input('address'),
        'total' => collect($cartItems)->sum(function ($item) {
            return $item['harga'] * $item['jumlah_barang'];
        }),
    ]);

    // Simpan setiap item di transaksi
    foreach ($cartItems as $item) {
        Transaction::create([
            'order_id' => $order->id,
            'product_name' => $item['nama_produk'],
            'quantity' => $item['jumlah_barang'],
            'price' => $item['harga'],
        ]);
    }

    // Hapus keranjang dari session
    session()->forget('cart');

    return redirect()->route('cart')->with('success', 'Pesanan Anda Akan Dikirim Hari Ini');
}



   

}
