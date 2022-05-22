<x-app-layout title="Dashboard">
    <div class="w-full max-w-7xl space-y-4 px-4">
        <div class="px-2 md:px-0 mt-1">
            <h1 class="font-bold text-3xl text-black">Dashboard</h1>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-2 md:gap-4">
            <x-dash.metric-card>
                <x-slot:value>0</x-slot:value>
                <x-slot:info>Total post reactions</x-slot:info>
            </x-dash.metric-card>
            <x-dash.metric-card>
                <x-slot:value>&lt; 500</x-slot:value>
                <x-slot:info>Total post views</x-slot:info>
            </x-dash.metric-card>
            <x-dash.metric-card>
                <x-slot:value>0</x-slot:value>
                <x-slot:info>Listings created</x-slot:info>
            </x-dash.metric-card>
            <x-dash.metric-card>
                <x-slot:value>0</x-slot:value>
                <x-slot:info>Credits available</x-slot:info>
            </x-dash.metric-card>
        </div>
        <div class="w-full flex gap-2">
            <aside class="hidden md:block w-full max-w-[240px]">
                <ul>
                    <x-link.button-hover href="{{ route('dashboard') }}"
                        class="{{ Request::route()->getName() === 'dashboard' ? 'bg-white text-black font-semibold hover:bg-white' : ''  }}  hover:no-underline justify-between">
                        Posts
                        <span class="bg-neutral-300/80 px-1 rounded-md text-sm font-normal">{{ $posts->count()
                            }}</span>
                    </x-link.button-hover>
                    <x-link.button-hover class="hover:no-underline cursor-pointer justify-between">Series
                        <span class="bg-neutral-300/80 px-1 rounded-md text-sm font-normal">0</span>
                    </x-link.button-hover>
                    <x-link.button-hover class="hover:no-underline cursor-pointer justify-between">Followers
                        <span class="bg-neutral-300/80 px-1 rounded-md text-sm font-normal">0</span>
                    </x-link.button-hover>
                    <x-link.button-hover class="hover:no-underline cursor-pointer justify-between">Following tags
                        <span class="bg-neutral-300/80 px-1 rounded-md text-sm font-normal">0</span>
                    </x-link.button-hover>
                    <x-link.button-hover class="hover:no-underline cursor-pointer justify-between">Following users
                        <span class="bg-neutral-300/80 px-1 rounded-md text-sm font-normal">0</span>
                    </x-link.button-hover>
                    <x-link.button-hover class="hover:no-underline cursor-pointer justify-between">Following
                        organizations
                        <span class="bg-neutral-300/80 px-1 rounded-md text-sm font-normal">0</span>
                    </x-link.button-hover>
                    <x-link.button-hover class="hover:no-underline cursor-pointer justify-between">Following podcasts
                        <span class="bg-neutral-300/80 px-1 rounded-md text-sm font-normal">0</span>
                    </x-link.button-hover>
                    <x-link.button-hover class="hover:no-underline cursor-pointer justify-between">
                        <span class="flex items-center gap-2">
                            Listings
                            <x-icon.listing />
                        </span>
                        <span class="bg-neutral-300/80 px-1 rounded-md text-sm font-normal">0</span>
                    </x-link.button-hover>
                    <x-link.button-hover class="hover:no-underline cursor-pointer justify-between">Analytics
                        <span class="bg-neutral-300/80 px-1 rounded-md text-sm font-normal">0</span>
                    </x-link.button-hover>
                </ul>
            </aside>
            <div class="w-full py-4 pl-2 space-y-4">
                <h2 class="text-xl text-black font-bold">Posts</h2>
                <ul class="rounded-lg">
                    @if (count($posts) > 0)
                    @foreach ($posts as $post)

                    <div
                        class="grid grid-cols-4 items-center p-4 bg-white hover:bg-transparent border-x border-t last:border-b first:rounded-t-lg last:rounded-b-lg">
                        <h3 class="text-lg font-bold col-span-2">
                            <x-link.a href="/posts/{{ $post->slug }}"
                                class="hover:no-underline hover:text-brand-purple">{{ $post->title }}</x-link.a>
                        </h3>
                        <div class="text-amber-900 bg-amber-300 rounded-md text-sm px-1 w-min">Draft</div>
                        <div class="justify-self-end flex items-center">
                            <form action="{{ route('posts.destroy', ['id' => $post->id]) }}" method="POST">
                                @csrf
                                <button type="submit"
                                    class="text-red-500 px-3 py-2 text-sm hover:bg-black/5 rounded-md">Delete</button>
                            </form>
                            <button class="px-3 py-2 text-sm hover:bg-black/5 rounded-md">Edit</button>
                        </div>
                    </div>

                    @endforeach
                    @else

                    @endif
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
