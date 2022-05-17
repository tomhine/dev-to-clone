@php
$speakers = ['Angie Jones', 'Kelsey Hightower', 'Tracy Chou'];
@endphp

<x-app-layout>
    <div class="flex justify-center gap-4 w-full max-w-7xl">
        <!-- left sidebar -->
        <aside class="hidden md:flex flex-col gap-4 w-1/3 lg:w-1/4 lg:max-w-[240px] rounded-lg">
            @guest
            <x-login-info-card />
            @endguest
            <!-- Start of navigation -->
            <x-nav.main />

            <x-nav.other />

            <x-social-links />

            <x-tags-list class="pb-4" />
            <!-- End of navigation -->

            <x-side-card class="text-gray-700">
                <img src="{{ asset('images/aside/wasm.png') }}" alt="" class="rounded-md" aria-hidden>
                <div>
                    <strong class="font-bold text-brand-purple">Immerse yourself in the WebAssembly ecosystem
                        ✅</strong>
                </div>
            </x-side-card>
        </aside>
        <!-- post feed -->
        <div class="lg:max-w-2xl w-full md:w-2/3 lg:w-1/2 flex flex-col gap-2">
            <x-nav.post-feed-filters />
            @foreach ($posts as $post)
            <x-post :post="$post" bannerImage="{{ $loop->first && true }}" />
            @endforeach
        </div>
        <!-- right sidebar -->
        <aside class="hidden lg:flex flex-col gap-4 w-1/4 max-w-xs">
            <x-side-card>
                <img src="{{ asset('images/aside/codeland.png') }}" alt="" aria-hidden>
                <div class="border-b-2 border-gray-700 py-2">
                    <em class="font-bold text-gray-700">Codeland Keynote Speakers,
                        Announced!</em>
                </div>
                <div>
                    <ul>
                        @foreach ($speakers as $speaker)
                        <li class="text-brand-purple font-bold">&rarr; {{ $speaker }}</li>
                        @endforeach
                    </ul>
                </div>
            </x-side-card>
            <x-side-card class="text-brand-purple font-black gap-6">
                <img src="{{ asset('images/aside/forem-app.png') }}" alt="" class="rounded-md" aria-hidden>
                <div>
                    <strong class="text-2xl">Forem Android App is Here</strong>
                </div>
                <div>
                    <strong class="text-lg">It's the best place to regularly use DEV on mobile</strong>
                </div>
                <div class="py-4">
                    <p class="text-gray-800 font-normal">(We already have an iOS app out)</p>
                </div>
            </x-side-card>
            <x-side-card class="text-gray-700">
                <img src="{{ asset('images/aside/forem-jobs.png') }}" alt="" class="rounded-md" aria-hidden>
                <div>
                    <strong class="text-2xl font-bold">Open Engineering Roles @ Forem!</strong>
                </div>
                <div class="py-4">
                    <p class="font-bold">Forem is the open source software that runs DEV and a number of other
                        passionate communities. Interested in joining our global, remote-first team and helping us build
                        a better internet?</p>
                </div>
            </x-side-card>
        </aside>
    </div>
</x-app-layout>
