<button {{ $attributes->merge(['type' => 'submit', 'class' => 'flex items-center justify-center px-4 py-2
    bg-brand-purple border border-transparent rounded text-white capitalize hover:bg-brand-purplehover
    active:bg-brand-purple focus:outline-none focus:border-brand-purple focus:ring ring-brand-purple
    disabled:opacity-25 transition ease-in-out duration-150 font-semibold']) }}>
    {{ $slot }}
</button>
