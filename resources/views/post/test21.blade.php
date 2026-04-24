<x-error>
    @foreach($post as $a)
        {{$a->email}}
    @endforeach
</x-error>