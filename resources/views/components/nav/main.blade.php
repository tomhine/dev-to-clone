@php
$links = ['home', 'reading-list', 'listings', 'podcasts', 'videos',
'tags', 'FAQ', 'forem-shop', 'sponsors', 'about', 'contact'];
@endphp

<nav>
    <ul>
        @foreach ($links as $link)
        @php
        if ($link === 'reading-list') {
        if (!Auth::user()) continue;
        if (!Auth::user()->bookmarks->count()) continue;
        }
        @endphp
        <x-link.button-hover href="/{{ $link === 'home' ? '' : $link }}" class="px-2 capitalize">
            <span class="max-h-6 max-w-6">
                <x-nav.icon :icon="$link" />
            </span>
            {{ str_replace('-', ' ', $link) }}
            @if ($link === 'reading-list')
            <span class="bg-neutral-300/80 px-1 rounded-md text-sm">{{ Auth::user()->bookmarks_count }}</span>
            @endif
        </x-link.button-hover>
        @endforeach
    </ul>
</nav>
