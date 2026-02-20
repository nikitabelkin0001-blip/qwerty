<x-error>
    <p>
    @if($age < 18)
    Текст для пользователей старше 18 лет.
    @elseif($age == 18)
    18y.o.
    @else
    {{$age}}
    @endif
    </p>
</x-error>