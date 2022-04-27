@php
$links = ['home', 'listings', 'podcasts', 'videos', 'tags', 'FAQ', 'forem-shop', 'sponsors', 'about', 'contact'];
@endphp

<nav>
    <ul>
        @foreach ($links as $link)
        <x-link.button-hover href="/{{ $link === 'home' ? '' : '#' }}" class="px-2 capitalize">
            <span class="max-h-6 max-w-6">
                <x-nav.icon :icon="$link" />
            </span>
            {{ str_replace('-', ' ', $link) }}
        </x-link.button-hover>
        @endforeach
    </ul>
</nav>
