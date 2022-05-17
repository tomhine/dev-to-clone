<button {{ $attributes->merge(['class' => 'p-2 flex gap-2 items-center rounded-md border border-transparent
    hover:underline hover:bg-brand-purple/10 hover:text-brand-purple focus:bg-brand-purple/10 outline-none
    focus:text-brand-purple focus:ring-2 focus:ring-brand-purple transition-colors' ]) }}>
    {{ $slot }}
</button>
