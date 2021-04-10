{{-- @dump($movie) --}}

<div class="p-0.5 swiper-slide">
    <div class="flex flex-col overflow-hidden rounded shadow">
        <div class="flex-shrink-0">
        <img class="w-full cursor-pointer h-36"
        src="{{ 'https://image.tmdb.org/t/p/w500/' . $movie['poster_path'] }}"
        alt="poster">
        </div>
    </div>
</div>
