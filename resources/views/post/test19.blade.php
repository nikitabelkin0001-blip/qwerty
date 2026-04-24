<x-error>
    @foreach($post as $a)
        {{$a->name}}
        <br/>{{$a->age}}
        <br/>{{$a->email}}
    @endforeach
</x-error>