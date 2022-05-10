<x-app-layout title="Search results for {{ $searchTerm }}">
    <div class="w-full max-w-5xl space-y-4">
        <div class="px-2 md:px-0">
            <x-search-bar class="md:hidden" />
            <h2 class="hidden md:block text-3xl font-bold">Search results for {{ $searchTerm }}</h2>
        </div>
        <div class="w-full flex gap-4">
            <aside class="hidden md:block w-full max-w-[240px]"></aside>
            <div class="w-full space-y-2">
                @if (count($posts) > 0)
                @foreach ($posts as $post)
                <x-post :post="$post" :bannerImage="false" />
                @endforeach

                @else
                <div class="w-full p-16 border rounded-md bg-white">
                    <p class="text-center">No results match that query</p>
                </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
