
@props([
    'title' => null,
    'description' => null,
])

<div {{ $attributes->class(['card']) }}>
    @if ($title)
        <h3>{{ $title }}</h3>
    @endif

    @if ($description)
        <p>{{ $description }}</p>
    @endif

    {{ $slot }}
</div>

