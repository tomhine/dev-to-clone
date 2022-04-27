<a {{ $attributes->merge(['class' => 'px-4 py-2 flex items-center justify-center rounded border border-brand-purple
    text-brand-purple
    hover:underline hover:bg-brand-purple hover:text-white transition-colors']) }}
    >
    {{ $slot }}
</a>
