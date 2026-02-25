<x-error>
    @foreach ($mass as $mass2)
    @if($loop->index < count($mass)-3)
    <b>{{ $mass2 }}</b>
    @elseif ($loop->index >= count($mass)-3)
    <i>{{ $mass2 }}</i>
    @endif 
    @endforeach
</x-error>