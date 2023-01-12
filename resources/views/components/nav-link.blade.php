@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1  text-black-900 font-weight-bold font-medium leading-5  transition duration-150 ease-in-out hover:underline'
            : 'inline-flex items-center px-1 pt-1  text-black-900 font-weight-light font-medium leading-5  transition duration-150 ease-in-out hover:underline';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
