<x-error>
    @foreach($location as $locations)
    <p>
    @if(@isset($locations['country']))
    {{$locations['country']}}
    @else
    Россия
    @endif
    @if(@isset($locations['city']))
    {{$locations['city']}}
    @else
    Москва
    @endif
    </p>
    @endforeach
</x-error>