<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frosty Bites</title>
    <!-- Linking Google fonts for icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
    <!-- Linking SwiperJS CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans text-black">
     <!-- header section starts -->

    <header class="fixed top-0 left-0 right-0 z-50 p-4 bg-white bg-opacity-80 shadow-lg">
        <a class="text-4xl font-bold text-blue-500 flex items-center gap-2"> 
          <img src="asset/image/logo.png" alt="" class="h-12"> FROSTY BITE 
        </a>
        <div class="flex items-center justify-between">
            <nav class="flex ml-auto">
                <a href="#home" class="text-2xl mx-4 text-blue-500 hover:text-blue-300">Home</a>
                <a href="produk" class="text-2xl mx-4 text-blue-500 hover:text-blue-300">Product</a>
                <a href="contact.html" class="text-2xl mx-4 text-blue-500 hover:text-blue-300">Keranjang</a>
            </nav>
        </div>
    </header>
     <!-- header section ends -->
     
    <!-- home section starts -->
    <section class="h-screen bg-cover bg-center relative z-0 pt-28" style="background-image: url('asset/image/bg.png');">
        <div class="flex justify-center items-center h-full">
            <div class="relative">
                <div class="text-9xl font-bold text-white text-center tracking-wider leading-tight">
                    FROSTYBITE
                </div>
                <div class="absolute bottom-6 right-8 text-transparent text-9xl font-bold text-stroke-2 text-white opacity-50">
                    FROSTYBITE
                </div>
            </div>
        </div>
        <p class="text-xl text-white leading-relaxed max-w-[500px] mx-auto text-center whitespace-nowrap overflow-hidden border-r-[2px] border-white animate-typing">
  Your Text Here
</p>
        
    </section>
 <!-- home section ends -->

  <!-- Best Seller Section -->
  <section class="container mx-auto px-4 py-8">
    <h2 class="text-center text-6xl font-bold text-blue-500 mb-6">BEST SELLER</h2>
    <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-3">
      <!-- Card 1 -->
      <div class="border rounded-lg shadow-md hover:shadow-lg p-4 text-center">
  <img src="asset/image/best1.png" alt="TOP 1 WINGS NUGGETS" class="mx-auto w-30 h-40 mb-4" />
  <h3 class="text-lg font-bold text-blue-500">TOP 1 WINGS NUGGETS</h3>
  <p class="text-sm text-gray-600 mt-2">Nugget Lezat...</p>
</div>
      <!-- Card 2 -->
      <div class="border rounded-lg shadow-md hover:shadow-lg p-4 text-center">
      <img src="asset/image/best2.png" alt="TOP 1 WINGS NUGGETS" class="mx-auto w-30 h-40 mb-4" />
        <h3 class="text-lg font-bold text-blue-500">TOP 2 WINGS NUGGETS</h3>
        <p class="text-sm text-gray-600 mt-2">Kualitas terbaik...</p>
      </div>
      <!-- Card 3 -->
      <div class="border rounded-lg shadow-md hover:shadow-lg p-4 text-center">
      <img src="asset/image/best3.png" alt="TOP 1 WINGS NUGGETS" class="mx-auto w-30 h-40 mb-4" />
        <h3 class="text-lg font-bold text-blue-500">TOP 3 WINGS NUGGETS</h3>
        <p class="text-sm text-gray-600 mt-2">Favorit semua orang...</p>
      </div>
    </div>
  </section>

    <!-- footer section starts -->
    <section class="bg-blue-200 py-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-screen-xl mx-auto">
          <div class="flex items-center gap-4">
              <a href="https://wa.me/6285865771612" target="_blank">
                  <img src="asset/image/call.png" class="h-8"> <p class="text-white">085865771612</p>
              </a>
          </div>
          <div class="flex items-center gap-4">
              <a href="mailto:frostybites@gmail.com">
                  <img src="asset/image/email.png" class="h-8"> <p class="text-white">frostybites@gmail.com</p>
              </a>
          </div>
          <div class="flex items-center gap-4">
              <a href="//maps.app.goo.gl/uXvknGiAyj9DiG3U9" target="_blank">
                  <img src="asset/image/lokasi.png" class="h-8"> <p class="text-white">SMK TELKOM PURWOKERTO</p>
              </a>
          </div>
        </div>
    </section>
    <!-- footer section ends -->
  
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{asset('public/asset/script.js')}}"></script>
</body>
</html>
