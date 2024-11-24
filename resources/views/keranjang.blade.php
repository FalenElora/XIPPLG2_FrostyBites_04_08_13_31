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
            <a href="#" class="text-white hover:text-gray-200">Home</a>
            <a href="#" class="text-white hover:text-gray-200">Product</a>
        </nav>
    </header>

    <!-- Main content -->
    <main class="flex justify-center mt-8">
        <!-- Order Summary Section -->
        <section class="bg-white rounded-lg shadow-lg w-1/2 p-6 mr-6">
            <h2 class="text-xl font-bold text-blue-600 flex justify-between items-center">
                <span>Order Summary</span>
                <button class="text-sm text-blue-500 hover:text-blue-700">Remove All</button>
            </h2>

            <!-- Item List -->
            <div class="space-y-4 mt-4">
                <!-- Repeated item -->
                <div class="flex items-center border-b pb-4">
                    <img src="asset/image/produk1.png" alt="Wonder Nuggets" class="h-16 w-16 rounded-md mr-4">
                    <div class="flex-1">
                        <h3 class="text-lg font-semibold">Wonder Nuggets</h3>
                       
                        <div class="flex items-center mt-2">
                            <button class="px-2 py-1 border rounded text-blue-500">-</button>
                            <span class="mx-2">1</span>
                            <button class="px-2 py-1 border rounded text-blue-500">+</button>
                            <span class="ml-auto text-blue-600 font-semibold">Rp 30,000</span>
                        </div>
                    </div>
                </div>
                
                <!-- Repeat the above block for other items if needed -->
            </div>

            <!-- Summary Totals -->
            <div class="mt-6 space-y-2 text-sm text-gray-700">
                <div class="flex justify-between">
                    <span>Subtotal</span>
                    <span>Rp 120,000</span>
                </div>
                <div class="flex justify-between">
                    <span>Shipping Fees</span>
                    <span>Rp 5,000</span>
                </div>
                <div class="flex justify-between">
                    <span>Taxes</span>
                    <span>Rp 10,000</span>
                </div>
                <div class="flex justify-between font-bold text-lg mt-4">
                    <span>Total (including box)</span>
                    <span>Rp 125,000</span>
                </div>
            </div>
        </section>
        

        <!-- Checkout Form Section -->
        <section class="bg-white rounded-lg shadow-lg w-1/3 p-6">
            <form class="space-y-4">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" id="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="Input nama">
                </div>
                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                    <input type="text" id="phone" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="Input number">
                </div>
                <div>
                    <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                    <input type="text" id="address" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="Input address">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Payment</label>
                    <p class="mt-1">Cash on Delivery</p>
                </div>
                <button type="submit" class="w-full py-3 bg-blue-500 text-white rounded-md font-semibold hover:bg-blue-600">Check Out</button>
            </form>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-blue-600 text-white text-sm text-center py-10 mt-8">
        <div class="container mx-auto">
            <p>085865771612 | frostybites@gmail.com | SMK TELKOM PURWOKERTO</p>
        </div>
    </footer>
</body>

</html>
