<x-app-layout :title="$post->title">
    <div class="flex flex-col gap-2 w-full max-w-3xl">
        <article class="bg-white rounded-xl border flex flex-col">
            @if ($post->banner_image_url)
            <img src="{{ asset('images/banners/' . $post->banner_image_url) }}" alt="" aria-hidden class="rounded-t-md">
            @endif
            <div class="pl-16 pr-8 py-8 flex flex-col gap-2">
                <div>
                    <p>{{ $post->author->name }}</p>
                    <time class="text-xs text-gray-500">Posted on {{ $post->created_at->format('d F') }}</time>
                </div>
                <h2 class="text-5xl font-black my-2">{{ $post->title }}</h2>
                <ul class="flex items-center gap-2">
                    @foreach ($post->tags as $tag)
                    <li>#{{ $tag }}</li>
                    @endforeach
                </ul>
                <div class="prose">
                    <p>{!! Str::markdown($post->content) !!}</p>
                </div>
            </div>
        </article>
    </div>
</x-app-layout>
