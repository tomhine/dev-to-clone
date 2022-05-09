<div class="w-full rounded-md bg-zinc-50 p-4 border flex gap-4 flex-col">
    <h2 class="text-xl font-bold leading-6">
        <a href="{{ route('home')  }}" class="text-brand-purple hover:underline hover:text-brand-purplehover">DEV
            Community</a> is a
        community of 835,566 amazing developers
    </h2>
    <p>We're a place where coders share, stay up-to-date and grow their careers.</p>
    <div class="space-y-1">
        <x-link.button-main href="{{ route('register') }}">Create account</x-link.button-main>
        <x-link.button-hover href="{{ route('login') }}" class="justify-center">Log in</x-link.button-alt>
    </div>
</div>
