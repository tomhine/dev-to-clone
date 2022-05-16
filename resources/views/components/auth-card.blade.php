<div class="w-full sm:max-w-xl p-12 -mt-4 sm:-mt-2 bg-white border overflow-hidden sm:rounded-lg flex flex-col gap-4">

    <section class="text-center py-6">
        <div>
            <h2 class="text-3xl font-bold">Welcome to DEV community</h2>
        </div>
        <p>
            <x-link.a href="{{ route('home') }}">DEV Community</x-link.a> is a community of 846,223 amazing developers
        </p>
    </section>

    {{ $slot }}
</div>
