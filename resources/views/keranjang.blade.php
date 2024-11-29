<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frosty Bite Checkout</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-blue-200 font-sans">
    <!-- Header -->
    <header class="bg-blue-600 text-white py-4 flex justify-between items-center px-6">
        <div class="flex items-center space-x-2">
            <img src="asset/image/logo.png" alt="Frosty Bite Logo" class="h-12">
            <h1 class="text-2xl font-bold">FROSTY BITE</h1>
        </div>
        <nav class="flex space-x-6">
            <a href="{{ route('home') }}" class="text-white hover:text-gray-200">Home</a>
            <a href="{{ route('produk.index') }}" class="text-white hover:text-gray-200">Product</a>
        </nav>
    </header>

    <!-- Main content -->
    <main class="flex justify-center mt-8">
        <!-- Order Summary Section -->
        <section class="bg-white rounded-lg shadow-lg w-1/2 p-6 mr-6">
            <h2 class="text-xl font-bold text-blue-600 flex justify-between items-center">
                <span>Order Summary</span>
                <form action="{{ route('cart.removeAll') }}" method="POST">
                    @csrf
                    <button class="text-sm text-blue-500 hover:text-blue-700">Remove All</button>
                </form>
            </h2>

             <!-- Item List -->
            <div class="space-y-4 mt-4">
                <!-- Repeated item -->
                @if (!empty($cartItems))
                    @foreach($produk as $item)
                        <div class="flex items-center border-b pb-4">
                            <img src="{{ asset('storage/' . $item->photo) }}" alt="{{ $item->name }}"
                                class="h-16 w-16 rounded-md mr-4">
                            <div class="flex-1">
                                <h3 class="text-lg font-semibold">{{ $item->name }}</h3>
                                <p class="text-sm text-gray-600">Stock: {{ $item->stock }}</p>
                                <div class="flex items-center mt-2">
                                    <form action="{{ route('cart.decreaseQuantity', $item->id) }}" method="POST" class="inline">
                                        @csrf
                                        <button type="submit" class="px-2 py-1 border rounded text-blue-500">-</button>
                                    </form>
                                    <span class="mx-2">{{ $cartItems[$item->id]['jumlah_barang'] }}</span> <!-- Perbaikan di sini -->
                                    <form action="{{ route('cart.addQuantity', $item->id) }}" method="POST" class="inline">
                                        @csrf
                                        <button type="submit" class="px-2 py-1 border rounded text-blue-500">+</button>
                                    </form>
                                    <span class="ml-auto text-blue-600 font-semibold">Rp
                                        {{ number_format($item->harga * $cartItems[$item->id]['jumlah_barang'], 0, ',', '.') }}</span>
                                    <!-- Perbaikan di sini -->
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p font-semibold>Tidak Ada Produk</p>
                @endif
            </div>


            <!-- Summary Totals -->
            <!-- Summary Totals -->
            <div class="mt-6 space-y-2 text-sm text-gray-700">
                <!-- Subtotal -->
                <div class="flex justify-between">
                    <span>Subtotal</span>
                    <span>Rp {{ number_format($subtotal, 0, ',', '.') }}</span> <!-- Subtotal -->
                </div>

                <!-- Shipping Fees -->
                <div class="flex justify-between">
                    <span>Shipping Fees</span>
                    <span>Rp 15,000</span> <!-- Shipping Fees tetap -->
                </div>

                <!-- Taxes -->
                <div class="flex justify-between">
                    <span>Taxes</span>
                    <span>Rp 4,000</span> <!-- Taxes tetap -->
                </div>

                <!-- Total -->
                <div class="flex justify-between font-bold text-lg mt-4">
                    <span>Total (including box)</span>
                    <span>Rp {{ number_format($total, 0, ',', '.') }}</span>
                    <!-- Total (Subtotal + Shipping Fees + Taxes) -->
                </div>
            </div>

        </section>

        <!-- Checkout Form Section -->
        <section class="bg-white rounded-lg shadow-lg w-1/3 p-6">
    <form action="{{ route('checkout') }}" method="POST">
        @csrf
        <div class="mb-6">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name"
                class="mt-1 block w-full rounded-md border-2 border-blue-500 shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 px-3"
                placeholder="Nama Lengkap">
        </div>
        <div class="mb-6">
            <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
            <input type="text" name="phone"
                class="mt-1 block w-full rounded-md border-2 border-blue-500 shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 px-3"
                placeholder="Nomor Handphone">
        </div>
        <div class="mb-6">
            <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
            <textarea name="address"
                class="mt-1 block w-full h-32 rounded-md border-2 border-blue-500 shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 px-3"
                placeholder="Alamat Lengkap (Khusus Area Purwokerto)"></textarea>
        </div>
        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700">Payment</label>
            <p class="mt-1 text-red-500">Cash on Delivery</p>
        </div>
        <button type="submit"
            class="w-full py-3 bg-blue-500 text-white rounded-md font-semibold hover:bg-blue-600">Check Out</button>
    </form>

    <!-- Notification Messages -->
    @if(session('success'))
        <div class="alert alert-success bg-green-500 text-white p-3 mt-4 rounded-md">
            {{ session('success') }}
        </div>
    @elseif(session('error'))
        <div class="alert alert-danger bg-red-500 text-white p-3 mt-4 rounded-md">
            {{ session('error') }}
        </div>
    @endif
</section>




    </main>

    <!-- Footer -->
    <footer class="bg-blue-600 text-white text-sm text-center py-20 mt-8">
        <div class="container mx-auto">
            <p>085865771612 | frostybites@gmail.com | SMK TELKOM PURWOKERTO</p>
        </div>
    </footer>
</body>

</html>