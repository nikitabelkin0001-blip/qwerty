<x-error>
    @foreach ($mass as $mass2)
    @if ($mass2 === 0)
    
    @else
    {{ $mass2 }}
    @endif
    @endforeach
</x-error>