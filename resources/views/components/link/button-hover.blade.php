<a {{ $attributes->merge(['class' => 'px-4 py-2 flex gap-2 items-center rounded border border-transparent
    hover:underline hover:bg-brand-purple/10 hover:text-brand-purple transition-colors' ]) }}>
    {{ $slot }}
</a>
