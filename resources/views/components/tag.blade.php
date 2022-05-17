@props(['tag'])

@php
$styles = match($tag) {
'javascript' => 'text-yellow-500 hover:bg-yellow-500/10 hover:border-yellow-500/30',
'laravel' => 'text-red-500 hover:bg-red-500/10 hover:border-red-500/30',
'webdev' => 'text-violet-900 hover:bg-violet-900/10 hover:border-violet-900/30',
'php' => 'text-indigo-400 hover:bg-indigo-400/10 hover:border-indigo-400/30',
'python' => 'text-blue-700 hover:bg-blue-700/10 hover:border-blue-700/30',
'html' => 'text-orange-600 hover:bg-orange-600/10 hover:border-orange-600/30',
'css' => 'text-blue-400 hover:bg-blue-400/10 hover:border-blue-400/30',
'tailwind' => 'text-sky-500 hover:bg-sky-500/10 hover:border-sky-500/30',
'sql' => 'text-rose-600 hover:bg-rose-600/10 hover:border-rose-600/30',
'vue' => 'text-emerald-500 hover:bg-emerald-500/10 hover:border-emerald-500/30',
'react' => 'text-pink-500 hover:bg-pink-500/10 hover:border-pink-500/30',
'supabase' => 'text-green-600 hover:bg-green-600/10 hover:border-green-600/30',
'postgresql' => 'text-lime-600 hover:bg-lime-600/10 hover:border-lime-600/30',
default => 'text-neutral-700 hover:bg-neutral-500/10 hover:border-neutral-500/30',
}
@endphp

<li class="text-sm py-1 px-[7px] border border-transparent rounded-lg {{ $styles }}">#<span class="text-neutral-700">{{
        $tag }}</span>
</li>
