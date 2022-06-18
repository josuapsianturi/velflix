@props(['movie', 'genres'])

<div @click="open = true" class="flex flex-col mr-3 overflow-hidden rounded-md" style="background-color:  #181818">
    <div @click="open = true" class="w-72">
        <a href="{{ route('movies.show', $movie['id']) }}">
        <img class="w-full h-56 cursor-pointer"
            src="{{ 'https://image.tmdb.org/t/p/w500' . $movie['poster_path'] }}"
            alt="poster">
        </a>
    </div>

    <div x-show="open" x-cloak  class="">
    <!-- Buttons Navigation -->
    <div class="flex flex-row items-center justify-between m-4">
        <div class="flex items-center justify-center space-x-2">
            <button class="flex items-center justify-center bg-white rounded-full w-9 h-9 focus:outline-none" >
                <x-icons name="caret-right-fill" />
            </button>
            <button class="flex items-center justify-center w-8 h-8 border-2 border-gray-400 rounded-full hover:border-gray-100">
                <x-icons name="plus" />
            </button>
            <button class="flex items-center justify-center w-8 h-8 border-2 border-gray-400 rounded-full hover:border-gray-100">
                <x-icons name="hand-thumbs-up" />
            </button>
            <button class="flex items-center justify-center w-8 h-8 border-2 border-gray-400 rounded-full hover:border-gray-100">
                <x-icons name="hand-thumbs-down" />
            </button>
        </div>

        <div class="">
            <button class="flex items-center justify-center w-8 h-8 border-2 border-gray-400 rounded-full hover:border-gray-100 focus:outline-none ">
                <x-bi-chevron-down class="w-4 h-4 text-white" />
            </button>
        </div>
    </div>
    <!-- End Buttons Navigation -->

    <!-- Rating -->
    <div class="flex mx-4">
        <span class="font-bold text-green-500">{{ $movie['vote_average'] * 10 . '%' }}  Match</span>
    </div>
    <!-- End Rating -->

    <!-- Genres -->
    <div class="flex m-4">
        <span class="flex text-sm font-medium text-gray-400 truncate">
        @foreach ($movie['genre_ids'] as $genre)
            @if ($loop->index)
                &middot;
                {{ $genres->get($genre)}}
            @else
                @break
            @endif
        @endforeach
        </span>
    </div>
    <!-- End Genres -->
    </div>
</div>
