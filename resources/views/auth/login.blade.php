<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Login</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite('resources/css/app.css')

    <style>
        body {
            margin: 0;
            font-family: 'Figtree', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center bg-gray-100 relative">
        <!-- Background Image -->
        <img id="background" class="absolute top-0 w-full h-full object-cover z-0"
            src="https://wallpapercave.com/wp/VmZHnTO.jpg" alt="Background Image" />

        <!-- Login Card -->
        <div
            class="relative z-10 w-full sm:max-w-md px-6 py-4 bg-gray-800 bg-opacity-20 backdrop-filter backdrop-blur-md shadow-md sm:rounded-lg max-h-[80vh] overflow-y-auto">
            <!-- Validation Errors -->
            @if ($errors->any())
                <div class="mb-4">
                    <ul class="text-red-600">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Status Session -->
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <!-- Login Form -->
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <label for="email" class="block font-medium text-sm text-white">{{ __('Email') }}</label>
                    <input id="email"
                        class="block mt-1 w-full rounded-lg shadow-sm border-transparent bg-white bg-opacity-20 text-white placeholder-gray-400 focus:bg-opacity-70 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        type="email" name="email" value="{{ old('email') }}" required autofocus
                        autocomplete="username" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <label for="password" class="block font-medium text-sm text-white">{{ __('Password') }}</label>
                    <input id="password"
                        class="block mt-1 w-full rounded-lg shadow-sm border-transparent bg-white bg-opacity-20 text-white placeholder-gray-400 focus:bg-opacity-70 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        type="password" name="password" required autocomplete="current-password" />
                </div>



                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            name="remember">
                        <span class="ml-2 text-sm text-gray-300">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-between mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-300 hover:text-gray-500 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <button type="submit"
                    class="ml-3 inline-flex items-center px-4 py-2 bg-teal-700 bg-opacity-80 backdrop-filter backdrop-blur-md shadow-md border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-teal-600 hover:bg-opacity-90 active:bg-teal-800 focus:outline-none focus:border-teal-800 focus:ring focus:ring-teal-200 disabled:opacity-25 transition ease-in-out duration-150">
                    {{ __('Log in') }}
                </button>

                </div>
            </form>
        </div>
    </div>
</body>

</html>
