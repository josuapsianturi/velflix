{{-- @dump($movie) --}}

<img class="w-screen h-full cursor-pointer"
    src="{{ 'https://image.tmdb.org/t/p/w500/' . $movie['poster_path'] }}"
    alt="poster">
