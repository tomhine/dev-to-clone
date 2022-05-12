<x-app-layout :title="$post->title">
    <div class="flex gap-4 w-full max-w-7xl px-4">
        <div class="w-16">
            <aside class="flex flex-col items-center gap-[17px] w-16 fixed top-[118px]">
                <livewire:like-button :post='$post' />
                <livewire:unicorn-button :post='$post' />
                <livewire:bookmark-button :post='$post' type="icon" />
            </aside>
        </div>
        <article class="bg-white rounded-xl border w-full max-w-3xl flex flex-col">
            @if ($post->banner_image_url)
            <img src="{{ asset('images/banners/' . $post->banner_image_url) }}" alt="" aria-hidden class="rounded-t-md">
            @endif
            <section class="pl-16 pr-12 py-8 flex flex-col gap-4">
                <div class="flex items-center gap-4">
                    <img src="{{ $post->author->profile_image ? asset(" images/avatars/{$post->author->profile_image}")
                    : asset('images/avatar.png') }}" alt="user avatar" class="rounded-full h-10 w-10" />
                    <div>
                        <p class="font-bold -mb-2">{{ $post->author->name }}</p>
                        <time class="text-xs text-gray-500">Posted on {{ $post->created_at->format('d F') }}</time>
                    </div>
                </div>
                <div>
                    <h2 class="text-4xl font-bold">{{ $post->title }}</h2>
                    <ul class="flex items-center gap-2 text-sm mt-2">
                        @foreach ($post->tags as $tag)
                        <li>#{{ $tag }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="prose mt-6">
                    {!! Str::markdown($post->content) !!}
                </div>
            </section>
        </article>
        <aside class="relative hidden lg:block w-full lg:max-w-[280px] xl:max-w-[345px]">
            <x-side-card
                class="border-t-[32px] border-t-gray-900 max-w-[260px] xl:max-w-[345px] fixed top-[73px] gap-6">
                <div class="flex gap-4 -mt-8">
                    <img src="{{ $post->author->profile_image ? asset(" images/avatars/{$post->author->profile_image}")
                    : asset('images/avatar.png') }}" alt="user avatar" class="h-12 w-12 rounded-full">
                    <h2 class="self-end font-bold text-xl text-gray-700">{{ $post->author->name }}</h2>
                </div>
                <x-button.hover class="justify-center">Follow</x-button.hover>
                <div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt autem deleniti excepturi maxime
                        sint fugit blanditiis possimus laudantium, quisquam perferendis facilis ipsa. Maxime distinctio
                        libero quod autem ratione, minus delectus?</p>
                </div>
                <div class="space-y-4">
                    <div>
                        <h3 class="uppercase text-gray-700 font-bold text-xs">Location</h3>
                        <address class="not-italic">Manchester, UK</address>
                    </div>
                    <div>
                        <h3 class="uppercase text-gray-700 font-bold text-xs">Work</h3>
                        <p class="not-italic">Frontend Dev</p>
                    </div>
                    <div>
                        <h3 class="uppercase text-gray-700 font-bold text-xs">Joined</h3>
                        <p class="not-italic">{{ $post->author->created_at->format('d F Y') }}</p>
                    </div>
                </div>
            </x-side-card>
        </aside>
    </div>
</x-app-layout>
