<header class="w-full bg-white border-b h-14 shadow-sm fixed top-0 left-0">
    <div class="w-full max-w-7xl h-full flex items-center justify-between mx-auto px-4">
        <!-- header left -->
        <div>
            <a href="{{ route('home') }}">
                <x-logo />
            </a>
            <!-- Search -->
            <div></div>
        </div>

        <!-- header right -->
        <div class="flex items-center gap-4">
            @guest
            <x-link.button-hover href="{{ route('login') }}">Log in</x-link.button-hover>

            <x-link.button-main href="{{ route('register') }}">Create account</x-link.button-main>
            @endguest
            @auth
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="px-4 py-2 flex gap-2 items-center rounded border border-transparent
                        hover:underline hover:bg-brand-purple/10 hover:text-brand-purple transition-colors">Log
                    out</button>
            </form>

            <x-link.button-main href="{{ route('posts.create') }}">Create post</x-link.button-main>
            @endauth
        </div>
    </div>
</header>
