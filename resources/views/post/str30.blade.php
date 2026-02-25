<x-error>
    <ul>
        @foreach ($mass as $mass2)
        @if ($loop->first) 
        <li class="first">{{ $loop->index + 1}} - {{ $mass2 }}</li>
        @elseif ($loop->last) 
        <li class="last">{{ $loop->index + 1}} - {{ $mass2 }}</li>
        @else
        <li>{{ $loop->index + 1 }} - {{ $mass2 }}</li>
        @endif
        @endforeach
    </ul>

</x-error>