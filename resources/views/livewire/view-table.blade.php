<div>
    <h3>{{ $table['title'] }}</h3>
    <table>
        <thead>
        @foreach ($table['column'] as $name)
            <th>{{ $name }}</th>
        @endforeach
        </thead>

        <tbody>
        @foreach ($data as $row)
            <tr>
            @foreach ($table['column'] as $name)
                <td> {{ $row->$name }} </td>
            @endforeach
            @if ($table['mode'])
            <td>
                <button wire:click="{{$table['mode']}}Data({{$row->id}})">{{$table['mode']}}</button>
            </td>               
            @endif
            </tr>
        @endforeach 
        </tbody>
    </table>
</div>
