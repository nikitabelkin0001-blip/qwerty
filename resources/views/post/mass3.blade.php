@if (is_array($mass) == true)
    <ul>
        @foreach ($mass as $mass2)
            <li>
                {{ $mass2 }}
            </li>
        @endforeach
    </ul>
@elseif (is_int($mass) == true)
    <p>{{ $mass }}</p>
@else
    Переменная не ни является чилом, ни массивом.
@endif