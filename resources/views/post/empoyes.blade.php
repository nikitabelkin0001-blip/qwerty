<x-error>
    <ul>
        @foreach ($empoyes as $empoyes2)
            <li>{{ $empoyes2['name'] }} {{ $empoyes2['surname'] }}, {{ $empoyes2['salary'] }}</li>
        @endforeach
    </ul>
    <br />
    <table border="1">
        @foreach ($empoyes as $empoyes2)
        <tr>
            @foreach ($empoyes2 as $empoyes3)
            <td style="padding: 3px; margin: auto;">
                {{ $empoyes3 }}
            </td>
            @endforeach
        </tr>
        @endforeach
    </table>

</x-error>