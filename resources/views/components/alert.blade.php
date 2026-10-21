
@props(['type' => 'info'])

@php
    $variants = ['success', 'warning', 'info', 'error'];

    $type = in_array($type, $variants, true) ? $type : 'info';

    $type = $type === 'error' ? 'danger' : $type;
@endphp

<div {{ $attributes->class(['alert', 'alert-' . $type]) }} role="alert">
    {{ $slot }}
</div>

