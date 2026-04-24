<x-error>
    @foreach($post as $a)
    <ul>
        <li>{{$a}}</li>
    </ul>
    @endforeach
</x-error>