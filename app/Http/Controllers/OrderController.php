<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function checkout(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'address' => 'required|string',
        ]);
    
        $cartItems = Cart::where('user_id', auth()->id())->get();
        $subtotal = $cartItems->sum(fn($item) => $item->quantity * $item->product->price);
        $shippingFee = 20000;
        $tax = 3000;
        $total = $subtotal + $shippingFee + $tax;
    
        $order = Order::create([
            'user_id' => auth()->id(),
            'name' => $validated['name'],
            'phone' => $validated['phone'],
            'address' => $validated['address'],
            'subtotal' => $subtotal,
            'shipping_fee' => $shippingFee,
            'tax' => $tax,
            'total' => $total,
        ]);
    
        $cartItems->each->delete(); // Hapus item keranjang
        return redirect()->route('order.success', $order->id);
    }
    
}
