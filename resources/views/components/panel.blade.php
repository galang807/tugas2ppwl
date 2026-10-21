
<section {{ $attributes->class(['panel']) }}>
    <header class="panel-header">
        @isset($header)
            {{ $header }}
        @elseif (isset($title))
            {{ $title }}
        @else
            Informasi
        @endif

        @isset($actions)
            <span>{{ $actions }}</span>
        @endisset
    </header>

    <div class="panel-body">
        {{ $slot }}
    </div>
</section>

