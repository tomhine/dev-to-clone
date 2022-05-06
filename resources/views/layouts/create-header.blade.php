<header class="w-full h-14 fixed top-0 left-0">
    <div class="w-full max-w-7xl h-full flex items-center justify-between mx-auto px-4">
        <!-- header left -->
        <div class="flex gap-4 items-center">
            <a href="{{ route('home') }}">
                <x-logo />
            </a>

            <div>
                <h1>Create Post</h1>
            </div>
        </div>

        <!-- header right -->
        <div class="flex items-center gap-2 pr-40">
            <x-button.hover type="button">Edit</x-button.hover>
            <x-button.hover type="button">Preview</x-button.hover>
        </div>
    </div>
</header>
