@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-md shadow-sm
border-gray-300 hover:border-gray-400 focus:border-brand-purple focus:ring-0 focus:ring-opacity-50']) !!}>
