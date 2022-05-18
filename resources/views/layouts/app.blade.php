<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ? $title . ' - ' : '' }} DEV Community 💻🖥</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.webp') }}" type="image/x-icon">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
        [x-cloak] {
            display: none;
        }
    </style>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    @livewireStyles
</head>

<body class="font-sans antialiased bg-neutral-100 text-gray-700">
    <!-- Backdrop -->
    <div class="hidden md:hidden absolute left-0 top-0 w-screen h-screen bg-[#090909]/50" data-backdrop></div>

    <!-- Mobile menu -->
    <x-mobile-menu />

    {{-- @include('layouts.navigation') --}}
    @includeUnless(Request::route()->getName() === 'posts.create', 'layouts.header')
    @includeWhen(Request::route()->getName() === 'posts.create', 'layouts.create-header')

    <!-- Page content -->
    <main
        class="flex flex-col items-center gap-4 py-4 md:px-4 min-h-[50vh] {{ Request::route()->getName() !== 'posts.create' ? 'mt-14' : '-mt-4' }}"
        data-page-main>
        {{ $slot }}
    </main>

    @includeUnless(Request::route()->getName() === 'posts.create' ,'layouts.footer')

    {{ $scripts }}
    <script src="{{ asset('js/mobileMenu.js') }}"></script>
    {{-- <script src="{{ asset('js/bannerImageUpload.js') }}"></script> --}}
    @livewireScripts
</body>

</html>
