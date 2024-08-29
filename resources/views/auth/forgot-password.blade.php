<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Password Reset</title>

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

        <!-- Password Reset Card -->
        <div
            class="relative z-10 w-full sm:max-w-md px-6 py-4 bg-gray-800 bg-opacity-20 backdrop-filter backdrop-blur-md shadow-md sm:rounded-lg max-h-[80vh] overflow-y-auto">
            <!-- Instruction Text -->
            <div class="mb-4 text-sm text-gray-300">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>

            <!-- Status Session -->
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

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

            <!-- Password Reset Form -->
            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div class="block">
                    <label for="email" class="block font-medium text-sm text-white">{{ __('Email') }}</label>
                    <input id="email"
                        class="block mt-1 w-full rounded-lg shadow-sm border-transparent bg-white bg-opacity-20 text-white placeholder-gray-400 focus:bg-opacity-70 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" />
                </div>

                <!-- Submit Button -->
                <div class="flex items-center justify-end mt-4">
                    <button type="submit"
                        class="ml-3 inline-flex items-center px-4 py-2 bg-teal-700 bg-opacity-80 backdrop-filter backdrop-blur-md shadow-md border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-teal-600 hover:bg-opacity-90 active:bg-teal-800 focus:outline-none focus:border-teal-800 focus:ring focus:ring-teal-200 disabled:opacity-25 transition ease-in-out duration-150">
                        {{ __('Email Password Reset Link') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
