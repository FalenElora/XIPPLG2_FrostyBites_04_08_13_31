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
                <a href="contact.html" class="text-2xl mx-4 text-blue-500 hover:text-blue-300">Keranjang</a>
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

  <!-- kategori Section -->
 <div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
  <section class="py-10 bg-blue-200 font-poppins rounded-lg">
    <div class="px-4 py-4 mx-auto max-w-7xl lg:py-6 md:px-6">
      <div class="flex flex-wrap mb-24 -mx-3">
        <div class="w-full pr-2 lg:w-1/4 lg:block">
          <div class="p-4 mb-5 bg-white border  ">
            <h2 class="text-2xl font-bold "> Categories</h2>
            <div class="w-16 pb-2 mb-6 border-b "></div>
            <form action="{{ route('produk.filter') }}" method="GET">
            <ul>
              @foreach($kategoris as $kategori)
                <li class="mb-4">
                  <label for="" class="flex items-center dark:text-gray-400">
                    <input type="checkbox" class="w-4 h-4 mr-2">
                    <span class="text-lg">{{ $kategori->name }}</span> <!-- Menampilkan kategori dengan kolom 'name' -->
                  </label>
                </li>
                
              @endforeach
            </ul>
            </form>
             

          </div>
         
          

          <!-- product Section -->
        </div>
        <div class="w-full px-3 lg:w-3/4">
          <div class="px-3 mb-4">
            <div class="items-center justify-between hidden px-3 py-2 bg-blue-500 md:flex  ">
              <div class="flex items-center justify-between">
               
                <h2 class="text-2xl font-bold text-white">Frosty Bites</h2>
               
              </div>
            </div>
          </div>
          <div class="flex flex-wrap items-center ">
 
          @foreach($produk as $item)
            <div class="w-full px-3 mb-6 sm:w-1/2 md:w-1/3">
              <div class="border border-blue-500">
                <div class="relative bg-gray-200">
                  <a href="#" class="">
                  <img src="{{ asset('storage/'.$item->photo) }}" alt="" class="w-50 h-56 mx-auto">
                  </a>
                </div>
                <div class="p-3 ">
                  <div class="flex items-center justify-between gap-2 mb-2">
                  <h3 class="text-lg font-semibold text-gray-800 ">{{ $item->name }}</h3>
                  <p class="text-gray-500 text-sm ml-auto">{{ $item->kategori->name }}</p>
                  </div>
                  <p class="text-lg ">
                  <span class="text-green-600">{{ $item->harga }}</span>
                  </p>
                  
                </div>
                <div class="flex justify-center p-4 border-t border-blue-500">

                  <a href="#" class="text-blue-500 flex items-center space-x-2  hover:text-red-500 ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 bi bi-cart3 " viewBox="0 0 16 16">
                      <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
                    </svg><span>Add to Cart</span>
                  </a>

                </div>
              </div>
            </div>
            @endforeach
            
            

          </div>
        
  </section>

</div>

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
