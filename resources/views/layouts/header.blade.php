<header class="w-full bg-white border-b h-14 shadow-sm fixed top-0 left-0 z-10" data-header>
    <div class="w-full max-w-7xl h-full flex items-center justify-between mx-auto px-2 md:px-4">
        <!-- header left -->
        <div class="flex items-center gap-2 md:gap-4">
            <x-button.hover class="flex md:hidden" data-mobile-menu-open-button>
                <x-icon.menu />
            </x-button.hover>

            <a href=" {{ route('home') }}">
                <x-logo />
            </a>
            <!-- Search bar -->
            <x-search-bar class="hidden md:flex w-[420px]" />
        </div>

        <!-- header right -->
        <div class="flex items-center gap-1 md:gap-4">
            <x-link.button-hover
                class="flex py-2 px-2 md:hidden {{ Request::route()->getName() === 'posts.search' ? 'bg-neutral-200' : '' }}"
                aria-label="search" href="{{ route('posts.search') }}">
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
