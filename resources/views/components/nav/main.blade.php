@php
$links = ['home', 'reading-list', 'listings', 'podcasts', 'videos', 'tags', 'FAQ', 'forem-shop', 'sponsors', 'about',
'contact'];
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
        </x-link.button-hover>
        @endforeach
    </ul>
</nav>
