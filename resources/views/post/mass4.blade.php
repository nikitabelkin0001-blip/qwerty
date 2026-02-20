<x-error>
    <table border="1">
        @foreach ($mass as $mass2)
            <tr>
                @foreach ($mass2 as $mass3)
                    <td>
                        {{ $mass3 }}
                    </td>
                @endforeach
            </tr>
        @endforeach

    </table>
</x-error>