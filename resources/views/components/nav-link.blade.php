@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-8 border-indigo-400 text-gray-900 focus:outline-none focus:text-gray-700 focus:border-gray-300 '
            : 'inline-flex items-center px-1 pt-1 border-b-8 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
