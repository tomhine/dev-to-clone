@props(['post', 'bannerImage' => false])

<a href="/posts/{{ $post->slug }}">
    <article class="bg-white rounded-md border focus:border-brand-purplehover focus:outline-brand-purplehover">
        @if ($bannerImage)
        <img src="{{ asset('images/banners/' . $post->banner_image_url) }}" alt="" aria-hidden class="rounded-t-md">
        @endif
        <div class="px-6 py-4 flex flex-col gap-2">
            <div class="text-xs text-gray-500">
                <p>{{ $post->author->name }}</p>
                <time>{{ $post->created_at->format('F d') }} ({{ $post->created_at->diffForHumans() }})</time>
            </div>
            <div class="flex flex-col gap-2 pl-6">
                <h2 class="text-2xl font-bold text-black mt-2 hover:text-brand-purplehover">{{ $post->title }}</h2>
                <ul class="flex items-center gap-2 text-sm">
                    @foreach ($post->tags as $tag)
                    <li>#{{ $tag }}</li>
                    @endforeach
                </ul>
                <div class="flex items-center justify-between text-sm mt-2">
                    <div class="flex gap-2">
                        @if ($post->likes_count > 0)
                        <span
                            class="flex gap-1 items-center rounded-lg px-2 py-1 hover:bg-gray-100 cursor-pointer group">
                            <x-icon.heart class="group-hover:text-black" /> {{ $post->likes_count }} Reactions
                        </span>
                        @endif
                        <span
                            class="flex gap-1 items-center rounded-lg px-2 py-1 hover:bg-gray-100 cursor-pointer group">
                            <x-icon.comment class="group-hover:text-black" /> Add comment
                        </span>
                    </div>

                    <div class="flex gap-2 items-center">
                        <p class="text-xs">{{ rand(1, 12) }} min read</p>
                        <button class="px-3 py-1.5 rounded-md bg-neutral-300/80 hover:bg-neutral-300">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </article>
</a>
