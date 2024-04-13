@foreach ($xe as $item)
    <div>
        {{-- @php
            dd($item->tenxe);
        @endphp --}}
        {{ $item->tenxe }}
    </div>
@endforeach
