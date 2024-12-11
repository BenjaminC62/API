<nav class="bg-gray-800 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <div class="text-white text-lg font-semibold flex flex-row">
            <p>Boargame App</p>
            <a href="{{route('accueil')}}" class="text-gray-300 hover:text-white transition duration-300 ml-3">Home</a>
        </div>
        <ul class="flex space-x-4">
            <li><a href="{{route('boardgame.jeux')}}" class="text-gray-300 hover:text-white transition duration-300">Jeux</a></li>
        </ul>
    </div>
</nav>
