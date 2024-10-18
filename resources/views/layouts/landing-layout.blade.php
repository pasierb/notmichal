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
            <a class="btn btn-ghost text-xl">
                <!-- <img src="{{ asset('images/notmichal.png') }}" alt="Michal Unfiltered" class="w-10 h-10 rounded-full"> -->
                <span class="inline-block bg-black text-white px-2 py-1">Michal</span> Unfiltered
            </a>
        </div>

        <main class="mt-12">
            {{ $slot }}
        </main>
    </div>

</body>

</html>
