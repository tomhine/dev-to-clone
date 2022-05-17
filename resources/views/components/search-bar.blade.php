<form method="GET" action="{{ route('posts.search') }}" {{ $attributes->merge(['class' =>
    'flex items-center border border-gray-300 hover:border-gray-400 h-10 w-full rounded-md py-[7px] pl-2 bg-white'])
    }} :class="inputFocused && 'ring-2 ring-brand-purple'" x-data="{ inputFocused: false, query: '' }">
    <input class="w-full outline-none" name="search" placeholder="Search..." @focus="inputFocused = true"
        @blur="inputFocused = false" x-model="query" />
    <x-button.hover type="submit" x-bind:disabled="query.trim().length < 1" class="rounded-lg py-1.5 cursor-pointer"
        aria-label="search">
        <x-icon.search />
    </x-button.hover>
</form>
