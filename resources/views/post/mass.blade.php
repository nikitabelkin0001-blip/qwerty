<x-error>
    @php
    $i=0
    @endphp
    @if(count($mass)>=1)
    @foreach($mass as $mass1)
        @php
        $i+=$mass1;
        @endphp
    @endforeach
    {{$i}}
    @else
    Масив пустой.
    @endif
</x-error>