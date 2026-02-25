<x-error>
    @if (isset($mass) && count($mass)>0)
    @foreach ($mass as $mass2)
    {{ $mass2 }}<br/>
    @endforeach
    @else
    В массиве нет элементов.
    @endif
</x-error>