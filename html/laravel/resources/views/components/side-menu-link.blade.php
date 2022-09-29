@props(['active'])

@php
$base_classes = 'block px-4 py-2 mt-2 text-sm text-gray-900 rounded-lg hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline ';
$classes = ($active ?? false)
            ? 'bg-gray-200'
            : 'bg-transparent';
@endphp

<a {{ $attributes->merge(['class' => $base_classes . $classes]) }}>
    {{ $slot }}
</a>
