
@props([
    'title' => 'Belum Ada Data',
    'description' => 'Data belum tersedia saat ini.',
    'icon' => '📭',
])

<div {{ $attributes->class(['empty-state']) }}>
    <div style="font-size:32px;">{{ $icon }}</div>

    <h3>{{ $title }}</h3>

    <p>{{ $description }}</p>

    {{ $slot }}
</div>

