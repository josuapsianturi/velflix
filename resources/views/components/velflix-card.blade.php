{{-- @dump($movie) --}}
{{-- @dump($genres) --}}

<div class="p-1 swiper-slide">
    <div class="flex flex-col overflow-hidden bg-black rounded shadow">
        <div class="flex-shrink-0">
        <img class="w-full cursor-pointer h-36"
        src="{{ 'https://image.tmdb.org/t/p/w500/' . $movie['poster_path'] }}"
        alt="poster">
        </div>

        <div class="flex m-4">
            <button class="flex items-center justify-center w-8 h-8 mr-2 bg-white border rounded-full">
                <x-bi-caret-right-fill class="w-5 h-5 text-black" />
            </button>
            <button class="flex items-center justify-center w-8 h-8 mr-2 rounded-full ring-2 ring-gray-400">
                <x-bi-check2 class="w-4 h-4 text-white" />
            </button>
            <button class="flex items-center justify-center w-8 h-8 mr-2 rounded-full ring-2 ring-gray-400">
                <x-bi-hand-thumbs-up class="w-4 h-4 text-white" />
            </button>
            <button class="flex items-center justify-center w-8 h-8 mr-8 rounded-full ring-2 ring-gray-400">
                <x-bi-hand-thumbs-down class="w-4 h-4 text-white" />
            </button>
            <button class="flex items-center justify-center w-8 h-8 rounded-full ring-2 ring-gray-400">
                <x-bi-chevron-down class="w-4 h-4 text-white" />
            </button>
        </div>

        <div class="flex mx-4">
            <span class="font-bold text-green-500">{{ $movie['vote_average'] * 10 . '%' }} Match</span>
        </div>

        <div class="flex m-4">
            <span class="flex text-sm font-medium text-gray-400 truncate">
            @foreach ($movie['genre_ids'] as $genre)
                {{ $genres->get($genre) }}
                <div class="flex items-center ">
                    <x-bi-dot />
                </div>
            @endforeach
            </span>
        </div>
    </div>
</div>
