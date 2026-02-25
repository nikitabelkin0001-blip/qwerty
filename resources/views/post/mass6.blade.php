<x-error>
    @foreach ($mass as $mass2)
        @if ($mass2 != 0)
            {{ $mass2 }}
        @elseif ($mass2 === 0)
            @break
        @endif
    @endforeach
</x-error>