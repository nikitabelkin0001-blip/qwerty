<x-error>
    @php
    $i=0
    @endphp
    @if(count($mass)>=1)
    <ul>
    @foreach($mass as $mass1)
        <li>
        @php
        $i=$mass1;
        @endphp
        {{sqrt($i)}}
        </li>
    @endforeach
    </ul>
    
    @else
    Масив пустой.
    @endif
</x-error>