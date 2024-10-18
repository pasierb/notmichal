<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="acid">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-base-100">
    <div class="container mx-auto">
        <div class="navbar bg-base-100">
            <div class="navbar-start">
                <a class="btn btn-ghost text-xl" href="{{ route('welcome') }}">
                    <!-- <img src="{{ asset('images/notmichal.png') }}" alt="Michal Unfiltered" class="w-10 h-10 rounded-full"> -->
                    Michal
                    <span class="inline-block bg-black text-white px-2 py-1 -rotate-2">Unfiltered</span>
                </a>
            </div>

            <div class="navbar-center">
                <ul class="menu menu-horizontal px-1">
                    <li><a href="{{ route('blog.index') }}">Blog</a></li>
                </ul>
            </div>

            <div class="navbar-end">
                <a href="{{ config('app.social_media.twitter') }}" target="_blank">
                    <x-fab-x-twitter class="w-6 h-6" />
                </a>
            </div>
        </div>

        <main class="mt-12 mb-32">
            {{ $slot }}
        </main>

    </div>

    <x-footer />
</body>

</html>
