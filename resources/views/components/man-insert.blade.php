@props(['title' => 'Add',
        'column' => ["famille"],
        'familly' => null,
    ])

<div class="man-form">
    <form method="POST" action="{{ $familly? route('article.store') : route('famille.store') }}">
        @csrf
        <label for="Insert">{{ $title }}</label><br>
        @foreach ($column as $col)

            @if ((str_ends_with($col, '_id')) && $familly)
                <select id="{{ $col }}" name="{{ $col }}" aria-placeholder="choose">
                    @foreach ($familly as $opt)
                        <option value="{{ $opt->id }}"> {{ $opt->nom }} </option>
                    @endforeach
                </select>

            @elseif ($col != 'id' && $col != 'created_at' && $col != 'updated_at')
            <area>{{ $col }}</area>
                <input type="text" id="{{ $col }}" name="{{ $col }}" required>
            @endif
            
        @endforeach
        <button type="submit">+</button>
    </form>
</div>