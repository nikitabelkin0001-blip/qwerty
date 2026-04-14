<x-error>
    @foreach ($posts as $post )

    <div>
        <h2>{{ $post->title }}</h2>
        <div>
            {{ $post->slug }}
        </div>
    </div>

    @endforeach
</x-error>