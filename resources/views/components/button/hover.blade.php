<button {{ $attributes->merge(['class' => 'p-2 flex gap-2 items-center rounded-md border border-transparent
    hover:underline hover:bg-brand-purple/10 hover:text-brand-purple transition-colors' ]) }}>
    {{ $slot }}
</button>
