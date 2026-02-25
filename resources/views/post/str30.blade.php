<x-error>
    <ul>
        @foreach ($mass as $mass2)
        <li>{{ $loop->index + 1}} - {{ $mass2 }}</li>
        @endforeach
    </ul>

</x-error>