@props(['movie', 'genres'])

<div @click="open = true" class="mr-3 flex flex-col overflow-hidden rounded-md" style="background-color:  #181818">
    <div @click="open = true" class="w-72">
        <a href="{{ route('movies.show', $movie['id']) }}">
        <img class="h-56 w-full cursor-pointer"
            src="{{ 'https://image.tmdb.org/t/p/w500' . $movie['poster_path'] }}"
            alt="poster">
        </a>
    </div>

    <div x-show="open" x-cloak  class="">
    <!-- Buttons Navigation -->
    <div class="flex flex-row items-center justify-between m-4">
        <div class="flex items-center justify-center space-x-2">
            <button class="flex h-9 w-9 items-center justify-center rounded-full bg-white focus:outline-none" >
                <x-icons name="caret-right-fill" />
            </button>
            <button class="flex h-8 w-8 items-center justify-center rounded-full border-2 border-gray-400 hover:border-gray-100">
                <x-icons name="plus" />
            </button>
            <button class="flex h-8 w-8 items-center justify-center rounded-full border-2 border-gray-400 hover:border-gray-100">
                <x-icons name="hand-thumbs-up" />
            </button>
            <button class="flex h-8 w-8 items-center justify-center rounded-full border-2 border-gray-400 hover:border-gray-100">
                <x-icons name="hand-thumbs-down" />
            </button>
        </div>

        <div class="">
            <button class="flex items-center justify-center w-8 h-8 border-2 border-gray-400 rounded-full hover:border-gray-100 focus:outline-none ">
                <x-bi-chevron-down class="h-4 w-4 text-white" />
            </button>
        </div>
    </div>
    <!-- End Buttons Navigation -->

    <!-- Rating -->
    <div class="mx-4 flex">
        <span class="font-bold text-green-500">{{ $movie['vote_average'] * 10 . '%' }}  Match</span>
    </div>
    <!-- End Rating -->

    <!-- Genres -->
    <div class="m-4 flex">
        <span class="flex truncate text-sm font-medium text-gray-400">
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
