<x-layout>
    <h1>Board Games</h1>
    <ul>
        @forelse ($boardGames as $boardGame)
            <li>
                <strong>{{ $boardGame['name'] }}</strong><br>
                {{ $boardGame['description'] }}
            </li>
        @empty
            <p>Aucun jeu disponible pour le moment.</p>
        @endforelse
    </ul>
</x-layout>
