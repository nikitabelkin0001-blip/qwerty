<x-error>
    <table>
        @foreach ($post as $posts)
            <tr>
                <td> <?php dump($posts) ?> </td>
            </tr>
        @endforeach
    </table>
</x-error>
