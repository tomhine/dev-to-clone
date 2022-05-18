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
            <x-link.button-main href="{{ route('posts.create') }}" class="hidden md:inline">Create post
            </x-link.button-main>

            <x-link.button-hover href="#" class="px-2">
                <x-icon.bell />
            </x-link.button-hover>

            <div x-data="{ open: false }" class="md:relative">
                <button type="button" class="h-10 w-10 rounded-full hover:bg-brand-purple/5 p-1" @click="open = !open">
                    <img src="{{ Auth::user()->profile_image ? asset('images/avatars/' . Auth::user()->profile_image) : asset('images/avatar.png') }}"
                        alt="user avatar" class="rounded-full h-full w-full object-fill" />
                </button>
                <div x-show="open" style="display: none"
                    class="absolute left-2 md:-left-64 right-2 md:right-0 md:top-11 p-2 bg-white rounded-lg border space-y-2 divide-y-2 shadow-lg"
                    @click.outside="open = false">
                    <div class="pt-2">
                        <x-link.button-hover class="grid grid-rows-2 gap-0 px-4 py-2 group">
                            <p>{{ Auth::user()->name }}</p>
                            <small class="text-sm text-gray-500 group-hover:text-brand-purple"><span>@</span>{{
                                str_replace(' ', '',
                                strtolower(Auth::user()->name)) }}</small>
                        </x-link.button-hover>
                    </div>
                    <div class="pt-2">
                        <x-link.button-hover href="{{ route('dashboard') }}">Dashboard</x-link.button-hover>
                        <x-link.button-hover href="{{ route('posts.create') }}">Create Post</x-link.button-hover>
                        <x-link.button-hover href="{{ route('bookmarks.index') }}">Reading list</x-link.button-hover>
                        <x-link.button-hover href="#">Settings</x-link.button-hover>
                    </div>
                    <div class="pt-2">
                        <form action="/logout" method="POST">
                            @csrf
                            <x-button.hover type="submit" class="px-4 w-full">Sign out</x-button.hover>
                        </form>
                    </div>
                </div>
            </div>
            @endauth
        </div>
    </div>
</header>
