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

    {{ $styles }}
</head>

<body class="font-sans antialiased bg-neutral-100 text-gray-800">
    {{-- @include('layouts.navigation') --}}
    @include('layouts.header')

    <!-- Page Content -->
    <main class="flex flex-col items-center gap-4 p-4 mt-14">
        {{ $slot }}
    </main>

    {{ $scripts }}
</body>

</html>
