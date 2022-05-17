@php
$tags = ['javascript', 'laravel', 'php', 'webdev', 'python', 'html', 'css', 'tailwind', 'sql', 'vue', 'react',
'postgresql', 'supabase'];
@endphp

<div {{ $attributes }}>
    <h2 class="py-2 pl-3 font-bold">
        @auth
        My Tags
        @else
        Popular Tags
        @endauth
    </h2>
    <ul class="max-h-[405px] overflow-y-auto">
        @foreach ($tags as $tag)
        <li>
            <x-link.button-hover>
                #{{ $tag }}
            </x-link.button-hover>
        </li>
        @endforeach
    </ul>
</div>
