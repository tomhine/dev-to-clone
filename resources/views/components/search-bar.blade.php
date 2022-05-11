<form method="GET" action="{{ route('posts.search') }}" data-search-bar-container {{ $attributes->merge(['class' =>
    'flex items-center border border-gray-300 hover:border-gray-400 h-10 w-full rounded-md py-[7px] pl-2 bg-white'])
    }} :class="inputFocused && 'ring-2 ring-brand-purple'" x-data="{ inputFocused: false }">
    <input class="w-full outline-none" name="search" placeholder="Search..." data-search-bar-input
        @focus="inputFocused = true" @blur="inputFocused = false" />
    <x-button.hover type="submit" class="rounded-lg py-1.5" aria-label="search">
        <x-icon.search />
    </x-button.hover>
</form>
