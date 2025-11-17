<div class="man-form">
    <form method="POST" action="{{ $road }}">
        @csrf
        @if ($row) @method('PUT') @endif
        <label for="Insert">{{ $title }}</label><br>
        @foreach ($table['column'] as $col)

            @if ((str_ends_with($col, '_id')) && $data)
            <area>{{ $col }}</area>
                <select id="{{ $col }}" name="{{ $col }}" aria-placeholder="choose">
                    @foreach ($data as $opt)
                        <option value="{{ $opt->id }}"> {{ $opt->nom }} </option>
                    @endforeach
                </select>

            @elseif ($col != 'id' && $col != 'created_at' && $col != 'updated_at')
            <area>{{ $col }}</area>
                <input type="text" id="{{ $col }}" name="{{ $col }}" value="{{ isset($row[$col]) ? $row[$col] : ''}}" required>
            @endif
            
        @endforeach
        <button type="submit">+</button>
    </form>
</div>
