<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Register</title>

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
        <img id="background" class="absolute top-0 w-full h-full object-cover z-0" src="https://wallpapercave.com/wp/VmZHnTO.jpg" alt="Background Image" />

        <!-- Register Card -->
        <div class="relative z-10 w-full sm:max-w-md px-6 py-4 bg-gray-800 bg-opacity-50 backdrop-filter backdrop-blur-md shadow-md sm:rounded-lg max-h-[80vh] overflow-y-auto">
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

            <!-- Register Form -->
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div>
                    <label for="name" class="block font-medium text-sm text-white">{{ __('Name') }}</label>
                    <input id="name" class="block mt-1 w-full rounded-lg shadow-sm border-transparent bg-white bg-opacity-20 text-white placeholder-gray-400 focus:bg-opacity-70 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <label for="email" class="block font-medium text-sm text-white">{{ __('Email') }}</label>
                    <input id="email" class="block mt-1 w-full rounded-lg shadow-sm border-transparent bg-white bg-opacity-20 text-white placeholder-gray-400 focus:bg-opacity-70 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <label for="password" class="block font-medium text-sm text-white">{{ __('Password') }}</label>
                    <input id="password" class="block mt-1 w-full rounded-lg shadow-sm border-transparent bg-white bg-opacity-20 text-white placeholder-gray-400 focus:bg-opacity-70 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="password" name="password" required autocomplete="new-password" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <label for="password_confirmation" class="block font-medium text-sm text-white">{{ __('Confirm Password') }}</label>
                    <input id="password_confirmation" class="block mt-1 w-full rounded-lg shadow-sm border-transparent bg-white bg-opacity-20 text-white placeholder-gray-400 focus:bg-opacity-20 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-20" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>

                <!-- Terms and Privacy Policy -->
                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <label for="terms" class="flex items-center">
                            <input type="checkbox" name="terms" id="terms" required class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />

                            <span class="ms-2 text-sm text-gray-300">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-300 hover:text-gray-500 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-300 hover:text-gray-500 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </span>
                        </label>
                    </div>
                @endif

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-300 hover:text-gray-500 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <button type="submit" class="ms-4 inline-flex items-center px-4 py-2 bg-teal-700 bg-opacity-80 backdrop-filter backdrop-blur-md shadow-md border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-teal-600 hover:bg-opacity-90 active:bg-teal-800 focus:outline-none focus:border-teal-800 focus:ring focus:ring-teal-200 disabled:opacity-25 transition ease-in-out duration-150">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
