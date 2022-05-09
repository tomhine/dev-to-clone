<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ? $title . ' - ' : '' }} DEV Community 💻🖥</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    @livewireStyles
</head>

<body class="font-sans antialiased bg-neutral-100 text-gray-800">
    <!-- Backdrop -->
    <div class="hidden md:hidden absolute left-0 top-0 w-full h-full bg-black/50" data-backdrop></div>

    <!-- Mobile menu -->
    <x-mobile-menu />

    {{-- @include('layouts.navigation') --}}
    @includeUnless(Request::route()->getName() === 'posts.create', 'layouts.header')
    @includeWhen(Request::route()->getName() === 'posts.create', 'layouts.create-header')

    <!-- Page content -->
    <main
        class="flex flex-col items-center gap-4 py-4 md:px-4 {{ Request::route()->getName() !== 'posts.create' ? 'mt-14' : '' }}"
        data-page-main>
        {{ $slot }}
    </main>

    {{ $scripts }}
    <script src="{{ asset('js/mobileMenu.js') }}"></script>
    <script src="{{ asset('js/searchBarFocus.js') }}"></script>
    @livewireScripts
</body>

</html>
