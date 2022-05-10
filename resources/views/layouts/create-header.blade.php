<header class="w-full h-14">
    <div class="w-full max-w-7xl h-full flex items-center justify-between mx-auto px-4">
        <!-- header left -->
        <div class="flex gap-4 items-center">
            <a href="{{ route('home') }}">
                <x-logo />
            </a>

            <div class="hidden md:block">
                <h1>Create Post</h1>
            </div>
        </div>

        <!-- header right -->
        <div class="flex items-center gap-2 md:pr-80">
            <x-button.hover type="button" data-markdown-edit-button>Edit</x-button.hover>
            <x-button.hover type="button" data-markdown-preview-button>Preview</x-button.hover>
        </div>
    </div>
</header>
