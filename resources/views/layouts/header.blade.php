<header class="w-full bg-white border-b h-14 shadow-sm absolute top-0 left-0 z-10">
    <div class="w-full max-w-7xl h-full flex items-center justify-between mx-auto px-2 md:px-4">
        <!-- header left -->
        <div class="flex items-center gap-2 md:gap-4">
            <button class="h-10 w-10 flex md:hidden items-center justify-center" data-mobile-menu-button>
                <x-icon.menu />
            </button>

            <a href=" {{ route('home') }}">
                <x-logo />
            </a>
            <!-- Search bar -->
            <div class="hidden md:flex items-center border border-gray-300 h-10 w-[420px] rounded-md py-[7px] pl-2"
                data-search-bar-container>
                <input class="w-full outline-none" placeholder="Search..." data-search-bar-input />
                <x-button.hover type="submit" class="rounded-xl py-1.5" aria-label="search">
                    <x-icon.search />
                </x-button.hover>
            </div>
        </div>

        <!-- header right -->
        <div class="flex items-center md:gap-4">
            <x-link.button-hover class="flex md:hidden" aria-label="search">
                <x-icon.search />
            </x-link.button-hover>
            @guest
            <x-link.button-hover href="{{ route('login') }}" class="hidden md:flex">Log in</x-link.button-hover>

            <x-link.button-main href="{{ route('register') }}">Create account</x-link.button-main>
            @endguest
            @auth
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="hidden px-4 py-2 md:flex gap-2 items-center rounded border border-transparent
                        hover:underline hover:bg-brand-purple/10 hover:text-brand-purple transition-colors">Log
                    out</button>
            </form>

            <x-link.button-main href="{{ route('posts.create') }}">Create post</x-link.button-main>
            @endauth
        </div>
    </div>
</header>
