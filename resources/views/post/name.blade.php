<x-error>
    @foreach ($mass as $mass2)
    @if (empty($mass))
    {{ $mass2 }}<br/>
    @else
    В массиве нет элементов.
    @break
    @endif
    @endforeach
</x-error>