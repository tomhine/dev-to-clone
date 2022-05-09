<x-app-layout>
    <div class="flex justify-center gap-4 w-full max-w-7xl">
        <!-- left sidebar -->
        <aside class="hidden md:flex flex-col gap-4 w-1/3 lg:w-1/4 lg:max-w-[240px] rounded-lg">
            @guest
            <x-login-info-card />
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
