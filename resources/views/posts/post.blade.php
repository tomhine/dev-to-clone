<x-app-layout :title="$post->title">
    <div class="flex gap-2 w-full max-w-7xl">
        <article class="bg-white rounded-xl border w-full max-w-3xl flex flex-col">
            @if ($post->banner_image_url)
            <img src="{{ asset('images/banners/' . $post->banner_image_url) }}" alt="" aria-hidden class="rounded-t-md">
            @endif
            <div class="pl-16 pr-8 py-8 flex flex-col gap-2">
                <div>
                    <p>{{ $post->author->name }}</p>
                    <time class="text-xs text-gray-500">Posted on {{ $post->created_at->format('d F') }}</time>
                </div>
        </article>
    </div>
    <x-slot:scripts>@livewireScripts</x-slot>
</x-app-layout>
