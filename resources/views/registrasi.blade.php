<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frosty Bites Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-500 h-screen flex items-center justify-center">
    <div class="flex bg-blue-600 w-11/12 max-w-4xl rounded-lg overflow-hidden shadow-lg">
        <!-- Left Side -->
        <div class="w-1/2 flex flex-col justify-center items-center bg-gradient-to-b from-blue-500 to-blue-700 p-8">
            <h1 class="text-white text-5xl font-bold text-left mb-4">FROSTY<br>BITES</h1>
        </div>
        <!-- Right Side -->
        <div class="w-1/2 bg-white flex flex-col justify-center p-8">
            <h2 class="text-blue-600 text-2xl font-bold mb-2">Registrasi</h2>
            <p class="text-gray-500 mb-6">It's just a few minutes and free</p>
            
            <!-- Login Form -->
            <form action="{{ route('registrasi.submit')}}" method="POST">
                @csrf <!-- Token CSRF untuk keamanan -->
                
                <!-- Username Input -->
                <div class="mb-4">
                    <label for="name" class="sr-only">Nama Lengkap</label>
                    <div class="flex items-center border border-gray-300 rounded px-3 py-2">
                        <input id="name" type="text" name="name" placeholder="name" class="w-full outline-none text-gray-700" required>
                    </div>
                </div>
                
                <!-- Email Input -->
                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <div class="flex items-center border border-gray-300 rounded px-3 py-2">
                        <input id="email" type="email" name="email" placeholder="nama@gmail.com" class="w-full outline-none text-gray-700" required>
                    </div>
                </div>

                <!-- Password Input -->
                <div class="mb-6">
                    <label for="password" class="sr-only">Password</label>
                    <div class="flex items-center border border-gray-300 rounded px-3 py-2">
                        <input id="password" type="password" name="password" placeholder="Password" class="w-full outline-none text-gray-700" required>
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 rounded">
                    REGISTRASI
                </button>
            </form>
            <div class="mt-4 text-center">
    <p class="text-gray-500">
        Sudah memiliki akun? 
        <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Login</a>
    </p>
</div>
        </div>
    </div>
</body>
</html>
