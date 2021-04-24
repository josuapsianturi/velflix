<div class="relative p-1 text-white bg-black border border-white ">
    <x-bi-search class="absolute w-5 h-5 m-1" />
    <input wire:model.debounce.500ms="searchVelflix" type="text" placeholder="Titles, people, genres" class="ml-8 text-white placeholder-gray-500 bg-black focus:outline-none ">

    <div class="absolute w-64 p-2 mt-2 -ml-2 text-sm bg-gray-700">
        <ul>
            @foreach ($searchVelflixResults as $searchResults)
            <li class="p-1 border-b border-gray-500">
                <a href="{{ route('movies.show', $searchResults['id']) }}" class="hover:bg-gray-400">
                    {{ $searchResults['title'] }}
                </a>
            </li>
            @endforeach
        </ul>

    </div>
</div>
