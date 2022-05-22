<x-app-layout title="Reading List">
    <div class="w-full max-w-7xl space-y-4">
        <div class="px-2 md:px-0">
            <h2 class="hidden md:block text-3xl font-bold">Reading list ({{ count($bookmarks) }})</h2>
        </div>
        <div class="w-full flex gap-4">
            <aside class="hidden md:block w-full max-w-[240px]"></aside>
            <div class="w-full bg-white border border-neutral-300 rounded-xl p-6 space-y-8">
                @if (count($bookmarks) > 0)
                @foreach ($bookmarks as $bookmark)
                <div class="flex gap-4">
                    <img src="{{ $bookmark->user->profile_image ? asset("
                        images/avatars/{$bookmark->post->author->profile_image}")
                    : asset('images/avatar.png') }}" alt="author profile avatar" class="rounded-full h-8 w-8">
                    <div>
                        <a href="/posts/{{ $bookmark->post->slug }}">
                            <h2 class="text-lg font-bold">{{ $bookmark->post->title }}</h2>
                        </a>
                        <div class="text-sm flex items-center gap-2">
                            <p class="font-medium">{{ $bookmark->post->author->name }}</p>
                            <time class="text-neutral-500/80">
                                •
                                {{ $bookmark->post->created_at->format('F d') }}
                                •
                                {{ rand(1, 12) }} min read
                                •
                            </time>
                            <ul class="flex">
                                @if (strlen($bookmark->post->tags) > 0)
                                @foreach (explode(',', $bookmark->post->tags) as $tag)
                                <x-tag :tag="$tag" />
                                @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach

                @else
                <div class="w-full p-16 rounded-md bg-white text-center">
                    <h3 class="text-lg font-bold">Your reading list is empty</h3>
                    <p class="text-neutral-500">Click the bookmark reaction
                        <x-icon.bookmark class="inline" /> when viewing a post to add it to your reading
                        list.
                    </p>
                </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
