
@props(['variant' => 'secondary'])

<span {{ $attributes->class(['badge', 'badge-' . $variant]) }}>
    {{ $slot }}
</span>

