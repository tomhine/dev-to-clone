<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>The page you were looking for doesn't exist (404)</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="bg-white w-screen h-screen flex items-center justify-center">
    <div class="space-y-4">
        <div class="p-[25px] rounded-3xl bg-[#36377c] h-[350px] w-[350px]">
            <img src="https://i.imgur.com/AdvTDlI.jpg" alt="404 page not found" class="rounded-3xl">
        </div>
        <div class="text-xl text-center">
            <p class="mb-4">This page does not exist</p>
            <x-link.a href="{{ route('home') }}" class="underline">Return to Home Page</x-link.a>
        </div>
    </div>
</body>

</html>
