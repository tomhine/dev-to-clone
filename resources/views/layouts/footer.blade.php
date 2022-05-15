<footer class="w-full flex flex-col items-center gap-4 justify-center p-12 bg-neutral-200 text-sm mt-8">
    <p>
        <x-link.a href="{{ route('home') }}">DEV Clonemunity</x-link.a>
        — A fabricated and imaginary social network for software developers. Or, at least one aspiring dev.
    </p>
    <div class="text-center">
        <p>Not built on <x-link.a href="https://www.forem.com">Forem</x-link.a> (although I'm sure it's lovely) -
            <x-link.a href="#">open source
            </x-link.a> software that powers
            <x-link.a href="{{ route('home') }}">DEV</x-link.a> and other inclusive communities.
        </p>
        <p>Made with love and <x-link.a href="https://www.laravel.com">Laravel</x-link.a>. DEV Clonemunity © 2022 -
            2022.</p>
    </div>
    <x-link.button-hover href="{{ route('home') }}" class="px-2">
        <x-icon.forem-leaf />
    </x-link.button-hover>
</footer>
