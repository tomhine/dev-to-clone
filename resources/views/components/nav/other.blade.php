@php
$links = ['code-of-conduct', 'privacy-policy', 'terms-of-use'];
@endphp

<nav>
    <ul>
        <h2 class="py-2 pl-3 font-bold">Other</h2>
        @foreach ($links as $link)
        <x-link.button-hover href="/{{ $link }}" class="px-2">
            <span class="max-h-6 max-w-6">
                <x-nav.icon :icon="$link" />
            </span>
            {{ ucwords(str_replace('-', ' ', $link)) }}
        </x-link.button-hover>
        @endforeach
    </ul>
</nav>
