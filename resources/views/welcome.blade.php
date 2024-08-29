<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite('resources/css/app.css')

</head>

<body class="font-sans antialiased">
    <div class="bg-gray-50 text-black/50 min-h-screen flex flex-col relative">
        <img id="background" class="absolute top-0 w-full h-full object-cover z-0 pointer-events-none"
            src="https://wallpapercave.com/wp/VmZHnTO.jpg" />

        <!-- Navigation -->
        <div class="absolute top-0 right-0 p-6 z-20">
            @if (Route::has('login'))
                <nav class="space-x-4">
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="text-lg font-semibold text-white transition hover:text-gray-300 focus:outline-none focus-visible:ring-2 focus-visible:ring-[#FF2D20]">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}"
                            class="text-lg font-semibold text-white transition hover:text-gray-300 focus:outline-none focus-visible:ring-2 focus-visible:ring-[#FF2D20]">
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="text-lg font-semibold text-white transition hover:text-gray-300 focus:outline-none focus-visible:ring-2 focus-visible:ring-[#FF2D20]">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </div>

        <!-- Main Content -->
        <main class="flex-grow flex flex-col items-center justify-center z-10">
            <img style="height: 200px; width: auto;" src="{{ asset('storage/pic/logo-laravel-1024.png') }}"
                alt="Laravel Logo">
        </main>

        <!-- Footer -->
        <footer class="py-16 text-center text-sm text-white z-10">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </footer>
    </div>
</body>

</html>
