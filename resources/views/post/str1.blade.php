<x-error>
    @php
    $i;
    @endphp
    <ul>
        @foreach($str1 as $key=>$str)
        @php
        $i = $str
        @endphp
        <li>
            {{$key+1}}=>{{$i}}
        </li>
        @endforeach
    </ul>
</x-error>