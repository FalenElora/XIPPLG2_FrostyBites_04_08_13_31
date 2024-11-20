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
                <a href="product.html" class="text-2xl mx-4 text-blue-500 hover:text-blue-300">Product</a>
                <a href="contact.html" class="text-2xl mx-4 text-blue-500 hover:text-blue-300">Contact Us</a>
            </nav>
        </div>
    </header>
     <!-- header section ends -->
     
    <!-- home section starts -->
    <section class="h-screen bg-cover bg-center relative z-0 pt-28" style="background-image: url('asset/image/bg2.png');">
        <div class="flex justify-center items-center h-full">
            <div class="relative">
                <div class="text-9xl font-bold text-white text-center tracking-wider leading-tight">
                    PRODUCT
                </div>
                <div class="absolute bottom-6 right-8 text-transparent text-9xl font-bold text-stroke-2 text-white opacity-50">
                    PRODUCT
                </div>
            </div>
        </div>
        
        
    </section>
 <!-- home section ends -->

  <!-- Product Section -->
  <section class="container mx-auto px-6 py-8">
    <h2 class="text-center text-6xl font-bold text-blue-500 mb-6">PRODUCT</h2>
    <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-3">
        <!-- Content goes here -->
    

        <!-- Card 1 -->
        <div class="bg-white shadow-md rounded-lg p-4 text-center">
        <img src="asset/image/produk1.png" alt="Springroll" class="mx-auto w-30 h-40 mb-4" />
          <h3 class="text-lg font-bold">Springroll</h3>
          <p class="text-gray-600 text-sm">Short description of the product goes here.</p>
        </div>
        <!-- Card 2 -->
        <div class="bg-white shadow-md rounded-lg p-4 text-center">
        <img src="asset/image/produk2.png" alt="Kaki Naga" class="mx-auto w-30 h-40 mb-4" />
          <h3 class="text-lg font-bold">Kaki Naga</h3>
          <p class="text-gray-600 text-sm">Short description of the product goes here.</p>
        </div>
        <!-- Card 3 -->
        <div class="bg-white shadow-md rounded-lg p-4 text-center">
        <img src="asset/image/produk3.png" alt="Wonton King Dumplings" class="mx-auto w-30 h-40 mb-4" />
          <h3 class="text-lg font-bold">Wonton King Dumplings</h3>
          <p class="text-gray-600 text-sm">Short description of the product goes here.</p>
        </div>
        <!-- Add more product cards similarly -->
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
