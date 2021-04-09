{{-- @dump($velflix[0]['title']) --}}

<div class="container px-4 pt-16 mx-auto">
    <div class="popular-movies">
        <h2 class="text-lg font-bold tracking-wider text-gray-200">
            Popular on Velflix
        </h2>

        <div class="grid grid-cols-2 gap-4 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-5">
            @foreach ($velflix as $movies)
            <img class="w-screen h-full cursor-pointer"
            src="{{ 'https://image.tmdb.org/t/p/w500/' . $movies['poster_path'] }}"
            alt="poster">
            @endforeach
        </div>
    </div>
</div>
