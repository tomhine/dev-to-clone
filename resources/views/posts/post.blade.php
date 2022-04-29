<x-app-layout :title="$post->title">
    <div class="flex gap-2 w-full max-w-7xl px-4">
        <div class="w-16">
            <aside class="flex flex-col items-center gap-[17px] w-16 fixed top-32">
                <livewire:like-button :post='$post' />
                <livewire:unicorn-button :post='$post' />
                <livewire:bookmark-button :post='$post' />
            </aside>
        </div>
        <article class="bg-white rounded-xl border w-full max-w-3xl flex flex-col">
            @if ($post->banner_image_url)
            <img src="{{ asset('images/banners/' . $post->banner_image_url) }}" alt="" aria-hidden class="rounded-t-md">
            @endif
            <section class="pl-16 pr-12 py-8 flex flex-col gap-2">
                <div>
                    <p>{{ $post->author->name }}</p>
                    <time class="text-xs text-gray-500">Posted on {{ $post->created_at->format('d F') }}</time>
                </div>
                <div>
                    <h2 class="text-4xl font-bold">{{ $post->title }}</h2>
                    <ul class="flex items-center gap-2 text-sm mt-2">
                        @foreach ($post->tags as $tag)
                        <li>#{{ $tag }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="prose-xl mt-6">
                    {{ $post->content }}
                </div>
            </section>
        </article>
    </div>
</x-app-layout>
