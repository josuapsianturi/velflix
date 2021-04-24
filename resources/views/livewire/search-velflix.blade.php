<div class="relative p-1 text-white bg-black border border-white ">
    <x-bi-search class="absolute w-5 h-5 m-1" />
    <input wire:model.debounce.500ms="searchVelflix" type="text" placeholder="Titles, people, genres" class="ml-8 text-white placeholder-gray-500 bg-black focus:outline-none ">

    @if (strlen($searchVelflix >= 3))
    <div class="absolute w-64 p-2 mt-2 -ml-2 text-sm bg-gray-700">
        @if ($searchVelflixResults->count() > 0 )
        <ul>
            @foreach ($searchVelflixResults as $searchResults)
            <a href="{{ route('movies.show', $searchResults['id']) }}" class="hover:bg-gray-400">
            <li class="p-1 border-b border-gray-500">
                    {{ $searchResults['title'] }}
                </li>
            </a>
            @endforeach
        </ul>
        @else
        <div class="px-3 py-3">
            <span> Your search for "{{ $searchVelflix }}" did not have any matches</span>
            <span>Suggestions: </span>
                <ul>
                    <li>Try different keywords</li>
                    <li>Looking for a film or TV programme ? </li>
                    <li>Try using a film, TV programme title, an actor or director.</li>
                    <li>Try a genre, such as comedy, romance, sports or drama.</li>
                </ul>
        </div>
        @endif
    </div>
    @endif
</div>
