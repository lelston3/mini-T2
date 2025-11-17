@props(['road',
        'icon' => null,])

<div>
    <a href="{{ route($road) }}">
        @if ($icon)
            <img src="{{ asset($icon) }}" alt="{ $road{ }} icon" />
        @else
            <button>{{$road}}</button>
        @endif
    </a>
</div>