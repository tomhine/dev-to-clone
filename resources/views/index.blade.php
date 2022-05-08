<x-app-layout>
    <div class="flex justify-center gap-4 w-full max-w-7xl">
        <!-- left sidebar -->
        <aside class="hidden md:flex flex-col gap-4 w-1/3 lg:w-1/4 lg:max-w-[240px] rounded-lg">
            @guest
            <div class="w-full rounded-md bg-zinc-50 p-4 border flex gap-4 flex-col">
                <h2 class="text-xl font-bold leading-6">
                    <a href="{{ route('home')  }}"
                        class="text-brand-purple hover:underline hover:text-brand-purplehover">DEV Community</a> is a
                    community of 835,566 amazing developers
                </h2>
                <p>We're a place where coders share, stay up-to-date and grow their careers.</p>
                <div class="space-y-1">
                    <x-link.button-main href="{{ route('register') }}">Create account</x-link.button-main>
                    <x-link.button-hover href="{{ route('login') }}" class="justify-center">Log in</x-link.button-alt>
                </div>
            </div>
            @endguest
            <!-- Start of navigation -->
            <x-nav.main />
        </aside>
        <!-- post feed -->
        <div class="lg:max-w-2xl w-full md:w-2/3 lg:w-1/2 flex flex-col gap-2">
            <x-nav.post-feed-filters />
            @foreach ($posts as $post)
            <x-post :post="$post" bannerImage="{{ $loop->first && true }}" />
            @endforeach
        </div>
        <!-- right sidebar -->
        <aside class="hidden lg:flex flex-col w-1/4 max-w-xs bg-zinc-50 border rounded-lg"></aside>
    </div>
</x-app-layout>
