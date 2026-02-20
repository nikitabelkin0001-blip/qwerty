<x-error>
    <ul>
    @foreach ($mass as $mass2)
    @if ($mass2 % 2 === 0)
    <li>{{ $mass2 }}</li>
    @endif
    @endforeach
    </ul>
</x-error>