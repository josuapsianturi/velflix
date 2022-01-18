{{-- @dump($velflix) --}}
{{-- @dump($genres) --}}
{{-- @dump($trending) --}}
{{-- @dump($popular); --}}

<div class="container p-4 mx-auto">
    <!-- Popular Movies -->
    <section x-data="{ open: false}" >
        <h2 class="mb-4 text-lg antialiased font-bold tracking-wider text-gray-200">
            Popular on Velflix &rsaquo;
        </h2>

        <div class="carousel" data-flickity='{ "freeScroll": true, "wrapAround": true }'
            class="flex carousel flex-nowrap">
            <!-- Cards -->
            @foreach ($popular as $movie)
                <x-velflix-card :movie="$movie" :genres="$genres" />
            @endforeach
            <!-- End Cards -->
        </div>

        <!-- Modal card -->
        @foreach ($popular as $movie)
        <div x-show="open" x-cloak
            x-transition:enter="duration-500 ease-in-out transition-tansform"
            class="fixed top-0 left-0 flex items-center w-full h-full mt-6 overflow-y-auto ">
            <div class="container mx-auto overflow-y-auto bg-gray-500 rounded-lg opacity-75 lg:px-56">
                <div  @click.away="open = false" class="bg-gray-100 border-8 shadow-lg rounded-xl">
                    <!-- Modal Head -->
                    <div class="relative overflow-hidden bg-gray-200" >
                        <iframe class="absolute top-0 left-0 w-full h-full rounded-t-xl responsive-iframe"
                            src="https://www.youtube.com/embed/XIAtk0eFONw"
                            allow="autoplay; encrypted-media" allowfullscreen>
                        </iframe>
                        <button class="z-50" @click="open = false">
                            <svg  xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </button>

                    </div>

                    <!-- Modal Body -->
                    <div class="px-8 py-3">
                        <div class="relative overflow-hidden responsive-container">
                            <div class="flex flex-row w-full my-4 space-x-4">
                                <button class="flex items-center justify-center px-2 py-2 space-x-2 bg-white rounded shadow-md bg-gradient w-28 ">
                                    <x-icons name="caret-right-fill" />
                                    <span class="font-semibold text-black">Play</span>
                                </button>
                                <button class="flex items-center justify-center w-8 h-8 mr-2 rounded-full ring-2 ring-gray-400">
                                    <x-icons name="plus" />
                                </button>
                                <button class="flex items-center justify-center w-8 h-8 mr-2 rounded-full ring-2 ring-gray-400">
                                    <x-icons name="hand-thumbs-up" />
                                </button>
                                <button class="flex items-center justify-center w-8 h-8 mr-8 rounded-full ring-2 ring-gray-400">
                                    <x-icons name="hand-thumbs-down" />
                                </button>
                            </div>

                            <div class="flex my-4">
                                <div class="w-4/6">
                                    <span class="flex mb-3 space-x-4">
                                        <p class="font-bold text-green-500">{{ $movie['vote_average'] * 10 . '%' }} Match</p>
                                        <p>2021</p>
                                    </span>

                                    <span>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, voluptates.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, voluptatum?
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, nulla.
                                    </span>
                                    <span>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, voluptates.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, voluptatum?
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, nulla.
                                    </span>
                                    <span>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, voluptates.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, voluptatum?
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, nulla.
                                    </span>
                                    <span>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, voluptates.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, voluptatum?
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, nulla.
                                    </span>
                                </div>

                                <div class="w-2/6">
                                    <span class="flex mb-3 text-gray-500">
                                        Cast:
                                    </span>
                                    <span class="text-gray-500">
                                        Genres:
                                        @foreach ($movie['genre_ids'] as $genre)
                                        {{-- @dump($genre) --}}
                                            &middot;
                                            {{ $genres->get($genre)}}
                                        @endforeach
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </section>
    <!-- End Popular Movies -->

    <!-- Trending Movies -->
    <section x-data="{ open: false}" >
        <h2 class="mb-4 text-lg antialiased font-bold tracking-wider text-gray-200">
             Trending Now &rsaquo;
        </h2>

        <div class="carousel" data-flickity='{ "freeScroll": true, "wrapAround": true }'
            class="flex carousel flex-nowrap">
            <!-- Cards -->
            @foreach ($trending as $movie)
                <x-velflix-card :movie="$movie" :genres="$genres" />
            @endforeach
            <!-- End Cards -->
        </div>

        <!-- Modal card -->
        @foreach ($popular as $movie)
        <div x-show="open" x-cloak
            x-transition:enter="duration-500 ease-in-out transition-tansform"
            class="fixed top-0 left-0 flex items-center w-full h-full mt-6 overflow-y-auto ">
            <div class="container mx-auto overflow-y-auto bg-gray-500 rounded-lg opacity-75 lg:px-56">
                <div  @click.away="open = false" class="bg-gray-100 border-8 shadow-lg rounded-xl">
                    <!-- Modal Head -->
                    <div class="relative overflow-hidden bg-gray-200" >
                        <iframe class="absolute top-0 left-0 w-full h-full rounded-t-xl responsive-iframe"
                            src="https://www.youtube.com/embed/XIAtk0eFONw"
                            allow="autoplay; encrypted-media" allowfullscreen>
                        </iframe>
                        <button class="z-50" @click="open = false">
                            <svg  xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </button>

                    </div>

                    <!-- Modal Body -->
                    <div class="px-8 py-3">
                        <div class="relative overflow-hidden responsive-container">
                            <div class="flex flex-row w-full my-4 space-x-4">
                                <button class="flex items-center justify-center px-2 py-2 space-x-2 bg-white rounded shadow-md bg-gradient w-28 ">
                                    <x-icons name="caret-right-fill" />
                                    <span class="font-semibold text-black">Play</span>
                                </button>
                                <button class="flex items-center justify-center w-8 h-8 mr-2 rounded-full ring-2 ring-gray-400">
                                    <x-icons name="plus" />
                                </button>
                                <button class="flex items-center justify-center w-8 h-8 mr-2 rounded-full ring-2 ring-gray-400">
                                    <x-icons name="hand-thumbs-up" />
                                </button>
                                <button class="flex items-center justify-center w-8 h-8 mr-8 rounded-full ring-2 ring-gray-400">
                                    <x-icons name="hand-thumbs-down" />
                                </button>
                            </div>

                            <div class="flex my-4">
                                <div class="w-4/6">
                                    <span class="flex mb-3 space-x-4">
                                        <p class="font-bold text-green-500">{{ $movie['vote_average'] * 10 . '%' }} Match</p>
                                        <p>2021</p>
                                    </span>

                                    <span>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, voluptates.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, voluptatum?
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, nulla.
                                    </span>
                                    <span>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, voluptates.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, voluptatum?
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, nulla.
                                    </span>
                                    <span>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, voluptates.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, voluptatum?
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, nulla.
                                    </span>
                                    <span>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, voluptates.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, voluptatum?
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, nulla.
                                    </span>
                                </div>

                                <div class="w-2/6">
                                    <span class="flex mb-3 text-gray-500">
                                        Cast:
                                    </span>
                                    <span class="text-gray-500">
                                        Genres:
                                        @foreach ($movie['genre_ids'] as $genre)
                                        {{-- @dump($genre) --}}
                                            &middot;
                                            {{ $genres->get($genre)}}
                                        @endforeach
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </section>
    <!-- End Trending Movies -->

    <!-- Comedies Movies -->
    <section x-data="{ open: false}" >
        <h2 class="mb-4 text-lg antialiased font-bold tracking-wider text-gray-200">
             Comedies &rsaquo;
        </h2>

        <div class="carousel" data-flickity='{ "freeScroll": true, "wrapAround": true }'
            class="flex carousel flex-nowrap">
            <!-- Cards -->
            @foreach ($comedies as $movie)
                <x-velflix-card :movie="$movie" :genres="$genres" />
            @endforeach
            <!-- End Cards -->
        </div>

        <!-- Modal card -->
        @foreach ($popular as $movie)
        <div x-show="open" x-cloak
            x-transition:enter="duration-500 ease-in-out transition-tansform"
            class="fixed top-0 left-0 flex items-center w-full h-full mt-6 overflow-y-auto ">
            <div class="container mx-auto overflow-y-auto bg-gray-500 rounded-lg opacity-75 lg:px-56">
                <div  @click.away="open = false" class="bg-gray-100 border-8 shadow-lg rounded-xl">
                    <!-- Modal Head -->
                    <div class="relative overflow-hidden bg-gray-200" >
                        <iframe class="absolute top-0 left-0 w-full h-full rounded-t-xl responsive-iframe"
                            src="https://www.youtube.com/embed/XIAtk0eFONw"
                            allow="autoplay; encrypted-media" allowfullscreen>
                        </iframe>
                        <button class="z-50" @click="open = false">
                            <svg  xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </button>

                    </div>

                    <!-- Modal Body -->
                    <div class="px-8 py-3">
                        <div class="relative overflow-hidden responsive-container">
                            <div class="flex flex-row w-full my-4 space-x-4">
                                <button class="flex items-center justify-center px-2 py-2 space-x-2 bg-white rounded shadow-md bg-gradient w-28 ">
                                    <x-icons name="caret-right-fill" />
                                    <span class="font-semibold text-black">Play</span>
                                </button>
                                <button class="flex items-center justify-center w-8 h-8 mr-2 rounded-full ring-2 ring-gray-400">
                                    <x-icons name="plus" />
                                </button>
                                <button class="flex items-center justify-center w-8 h-8 mr-2 rounded-full ring-2 ring-gray-400">
                                    <x-icons name="hand-thumbs-up" />
                                </button>
                                <button class="flex items-center justify-center w-8 h-8 mr-8 rounded-full ring-2 ring-gray-400">
                                    <x-icons name="hand-thumbs-down" />
                                </button>
                            </div>

                            <div class="flex my-4">
                                <div class="w-4/6">
                                    <span class="flex mb-3 space-x-4">
                                        <p class="font-bold text-green-500">{{ $movie['vote_average'] * 10 . '%' }} Match</p>
                                        <p>2021</p>
                                    </span>

                                    <span>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, voluptates.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, voluptatum?
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, nulla.
                                    </span>
                                    <span>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, voluptates.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, voluptatum?
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, nulla.
                                    </span>
                                    <span>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, voluptates.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, voluptatum?
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, nulla.
                                    </span>
                                    <span>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, voluptates.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, voluptatum?
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, nulla.
                                    </span>
                                </div>

                                <div class="w-2/6">
                                    <span class="flex mb-3 text-gray-500">
                                        Cast:
                                    </span>
                                    <span class="text-gray-500">
                                        Genres:
                                        @foreach ($movie['genre_ids'] as $genre)
                                        {{-- @dump($genre) --}}
                                            &middot;
                                            {{ $genres->get($genre)}}
                                        @endforeach
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </section>
    <!-- End Comedies Movies -->

    <!-- Action Movies -->
    <section x-data="{ open: false}" >
        <h2 class="mb-4 text-lg antialiased font-bold tracking-wider text-gray-200">
            Action &rsaquo;
        </h2>

        <div class="carousel" data-flickity='{ "freeScroll": true, "wrapAround": true }'
            class="flex carousel flex-nowrap">
            <!-- Cards -->
            @foreach ($action as $movie)
                <x-velflix-card :movie="$movie" :genres="$genres" />
            @endforeach
            <!-- End Cards -->
        </div>

        <!-- Modal card -->
        @foreach ($action as $movie)
        <div x-show="open" x-cloak
            x-transition:enter="duration-500 ease-in-out transition-tansform"
            class="fixed top-0 left-0 flex items-center w-full h-full mt-6 overflow-y-auto ">
            <div class="container mx-auto overflow-y-auto bg-gray-500 rounded-lg opacity-75 lg:px-56">
                <div  @click.away="open = false" class="bg-gray-100 border-8 shadow-lg rounded-xl">
                    <!-- Modal Head -->
                    <div class="relative overflow-hidden bg-gray-200" >
                        <iframe class="absolute top-0 left-0 w-full h-full rounded-t-xl responsive-iframe"
                            src="https://www.youtube.com/embed/XIAtk0eFONw"
                            allow="autoplay; encrypted-media" allowfullscreen>
                        </iframe>
                        <button class="z-50" @click="open = false">
                            <svg  xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </button>

                    </div>

                    <!-- Modal Body -->
                    <div class="px-8 py-3">
                        <div class="relative overflow-hidden responsive-container">
                            <div class="flex flex-row w-full my-4 space-x-4">
                                <button class="flex items-center justify-center px-2 py-2 space-x-2 bg-white rounded shadow-md bg-gradient w-28 ">
                                    <x-icons name="caret-right-fill" />
                                    <span class="font-semibold text-black">Play</span>
                                </button>
                                <button class="flex items-center justify-center w-8 h-8 mr-2 rounded-full ring-2 ring-gray-400">
                                    <x-icons name="plus" />
                                </button>
                                <button class="flex items-center justify-center w-8 h-8 mr-2 rounded-full ring-2 ring-gray-400">
                                    <x-icons name="hand-thumbs-up" />
                                </button>
                                <button class="flex items-center justify-center w-8 h-8 mr-8 rounded-full ring-2 ring-gray-400">
                                    <x-icons name="hand-thumbs-down" />
                                </button>
                            </div>

                            <div class="flex my-4">
                                <div class="w-4/6">
                                    <span class="flex mb-3 space-x-4">
                                        <p class="font-bold text-green-500">{{ $movie['vote_average'] * 10 . '%' }} Match</p>
                                        <p>2021</p>
                                    </span>

                                    <span>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, voluptates.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, voluptatum?
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, nulla.
                                    </span>
                                    <span>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, voluptates.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, voluptatum?
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, nulla.
                                    </span>
                                    <span>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, voluptates.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, voluptatum?
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, nulla.
                                    </span>
                                    <span>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, voluptates.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, voluptatum?
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, nulla.
                                    </span>
                                </div>

                                <div class="w-2/6">
                                    <span class="flex mb-3 text-gray-500">
                                        Cast:
                                    </span>
                                    <span class="text-gray-500">
                                        Genres:
                                        @foreach ($movie['genre_ids'] as $genre)
                                        {{-- @dump($genre) --}}
                                            &middot;
                                            {{ $genres->get($genre)}}
                                        @endforeach
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </section>
    <!-- End Action Movies -->

    <!-- Western Movies -->
    <section x-data="{ open: false}" >
        <h2 class="mb-4 text-lg antialiased font-bold tracking-wider text-gray-200">
             Western &rsaquo;
        </h2>

        <div class="carousel" data-flickity='{ "freeScroll": true, "wrapAround": true }'
            class="flex carousel flex-nowrap">
            <!-- Cards -->
            @foreach ($western as $movie)
                <x-velflix-card :movie="$movie" :genres="$genres" />
            @endforeach
            <!-- End Cards -->
        </div>

        <!-- Modal card -->
        @foreach ($western as $movie)
        <div x-show="open" x-cloak
            x-transition:enter="duration-500 ease-in-out transition-tansform"
            class="fixed top-0 left-0 flex items-center w-full h-full mt-6 overflow-y-auto ">
            <div class="container mx-auto overflow-y-auto bg-gray-500 rounded-lg opacity-75 lg:px-56">
                <div  @click.away="open = false" class="bg-gray-100 border-8 shadow-lg rounded-xl">
                    <!-- Modal Head -->
                    <div class="relative overflow-hidden bg-gray-200" >
                        <iframe class="absolute top-0 left-0 w-full h-full rounded-t-xl responsive-iframe"
                            src="https://www.youtube.com/embed/XIAtk0eFONw"
                            allow="autoplay; encrypted-media" allowfullscreen>
                        </iframe>
                        <button class="z-50" @click="open = false">
                            <svg  xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </button>

                    </div>

                    <!-- Modal Body -->
                    <div class="px-8 py-3">
                        <div class="relative overflow-hidden responsive-container">
                            <div class="flex flex-row w-full my-4 space-x-4">
                                <button class="flex items-center justify-center px-2 py-2 space-x-2 bg-white rounded shadow-md bg-gradient w-28 ">
                                    <x-icons name="caret-right-fill" />
                                    <span class="font-semibold text-black">Play</span>
                                </button>
                                <button class="flex items-center justify-center w-8 h-8 mr-2 rounded-full ring-2 ring-gray-400">
                                    <x-icons name="plus" />
                                </button>
                                <button class="flex items-center justify-center w-8 h-8 mr-2 rounded-full ring-2 ring-gray-400">
                                    <x-icons name="hand-thumbs-up" />
                                </button>
                                <button class="flex items-center justify-center w-8 h-8 mr-8 rounded-full ring-2 ring-gray-400">
                                    <x-icons name="hand-thumbs-down" />
                                </button>
                            </div>

                            <div class="flex my-4">
                                <div class="w-4/6">
                                    <span class="flex mb-3 space-x-4">
                                        <p class="font-bold text-green-500">{{ $movie['vote_average'] * 10 . '%' }} Match</p>
                                        <p>2021</p>
                                    </span>

                                    <span>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, voluptates.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, voluptatum?
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, nulla.
                                    </span>
                                    <span>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, voluptates.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, voluptatum?
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, nulla.
                                    </span>
                                    <span>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, voluptates.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, voluptatum?
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, nulla.
                                    </span>
                                    <span>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, voluptates.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, voluptatum?
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, nulla.
                                    </span>
                                </div>

                                <div class="w-2/6">
                                    <span class="flex mb-3 text-gray-500">
                                        Cast:
                                    </span>
                                    <span class="text-gray-500">
                                        Genres:
                                        @foreach ($movie['genre_ids'] as $genre)
                                        {{-- @dump($genre) --}}
                                            &middot;
                                            {{ $genres->get($genre)}}
                                        @endforeach
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </section>
    <!-- End Wester Movies -->

    <!-- Horror Movies -->
    <section x-data="{ open: false}" >
        <h2 class="mb-4 text-lg antialiased font-bold tracking-wider text-gray-200">
              Horror &rsaquo;
        </h2>

        <div class="carousel" data-flickity='{ "freeScroll": true, "wrapAround": true }'
            class="flex carousel flex-nowrap">
            <!-- Cards -->
            @foreach ($horror as $movie)
                <x-velflix-card :movie="$movie" :genres="$genres" />
            @endforeach
            <!-- End Cards -->
        </div>

        <!-- Modal card -->
        @foreach ($popular as $movie)
        <div x-show="open" x-cloak
            x-transition:enter="duration-500 ease-in-out transition-tansform"
            class="fixed top-0 left-0 flex items-center w-full h-full mt-6 overflow-y-auto ">
            <div class="container mx-auto overflow-y-auto bg-gray-500 rounded-lg opacity-75 lg:px-56">
                <div  @click.away="open = false" class="bg-gray-100 border-8 shadow-lg rounded-xl">
                    <!-- Modal Head -->
                    <div class="relative overflow-hidden bg-gray-200" >
                        <iframe class="absolute top-0 left-0 w-full h-full rounded-t-xl responsive-iframe"
                            src="https://www.youtube.com/embed/XIAtk0eFONw"
                            allow="autoplay; encrypted-media" allowfullscreen>
                        </iframe>
                        <button class="z-50" @click="open = false">
                            <svg  xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </button>

                    </div>

                    <!-- Modal Body -->
                    <div class="px-8 py-3">
                        <div class="relative overflow-hidden responsive-container">
                            <div class="flex flex-row w-full my-4 space-x-4">
                                <button class="flex items-center justify-center px-2 py-2 space-x-2 bg-white rounded shadow-md bg-gradient w-28 ">
                                    <x-icons name="caret-right-fill" />
                                    <span class="font-semibold text-black">Play</span>
                                </button>
                                <button class="flex items-center justify-center w-8 h-8 mr-2 rounded-full ring-2 ring-gray-400">
                                    <x-icons name="plus" />
                                </button>
                                <button class="flex items-center justify-center w-8 h-8 mr-2 rounded-full ring-2 ring-gray-400">
                                    <x-icons name="hand-thumbs-up" />
                                </button>
                                <button class="flex items-center justify-center w-8 h-8 mr-8 rounded-full ring-2 ring-gray-400">
                                    <x-icons name="hand-thumbs-down" />
                                </button>
                            </div>

                            <div class="flex my-4">
                                <div class="w-4/6">
                                    <span class="flex mb-3 space-x-4">
                                        <p class="font-bold text-green-500">{{ $movie['vote_average'] * 10 . '%' }} Match</p>
                                        <p>2021</p>
                                    </span>

                                    <span>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, voluptates.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, voluptatum?
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, nulla.
                                    </span>
                                    <span>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, voluptates.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, voluptatum?
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, nulla.
                                    </span>
                                    <span>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, voluptates.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, voluptatum?
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, nulla.
                                    </span>
                                    <span>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, voluptates.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, voluptatum?
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, nulla.
                                    </span>
                                </div>

                                <div class="w-2/6">
                                    <span class="flex mb-3 text-gray-500">
                                        Cast:
                                    </span>
                                    <span class="text-gray-500">
                                        Genres:
                                        @foreach ($movie['genre_ids'] as $genre)
                                        {{-- @dump($genre) --}}
                                            &middot;
                                            {{ $genres->get($genre)}}
                                        @endforeach
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </section>
    <!-- End Horror Movies -->

    <!-- Animation Movies -->
    <section x-data="{ open: false}" >
        <h2 class="mb-4 text-lg antialiased font-bold tracking-wider text-gray-200">
             Animation &rsaquo;
        </h2>

        <div class="carousel" data-flickity='{ "freeScroll": true, "wrapAround": true }'
            class="flex carousel flex-nowrap">
            <!-- Cards -->
            @foreach ($animation as $movie)
                <x-velflix-card :movie="$movie" :genres="$genres" />
            @endforeach
            <!-- End Cards -->
        </div>

        <!-- Modal card -->
        @foreach ($animation as $movie)
        <div x-show="open" x-cloak
            x-transition:enter="duration-500 ease-in-out transition-tansform"
            class="fixed top-0 left-0 flex items-center w-full h-full mt-6 overflow-y-auto ">
            <div class="container mx-auto overflow-y-auto bg-gray-500 rounded-lg opacity-75 lg:px-56">
                <div  @click.away="open = false" class="bg-gray-100 border-8 shadow-lg rounded-xl">
                    <!-- Modal Head -->
                    <div class="relative overflow-hidden bg-gray-200" >
                        <iframe class="absolute top-0 left-0 w-full h-full rounded-t-xl responsive-iframe"
                            src="https://www.youtube.com/embed/XIAtk0eFONw"
                            allow="autoplay; encrypted-media" allowfullscreen>
                        </iframe>
                        <button class="z-50" @click="open = false">
                            <svg  xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </button>

                    </div>

                    <!-- Modal Body -->
                    <div class="px-8 py-3">
                        <div class="relative overflow-hidden responsive-container">
                            <div class="flex flex-row w-full my-4 space-x-4">
                                <button class="flex items-center justify-center px-2 py-2 space-x-2 bg-white rounded shadow-md bg-gradient w-28 ">
                                    <x-icons name="caret-right-fill" />
                                    <span class="font-semibold text-black">Play</span>
                                </button>
                                <button class="flex items-center justify-center w-8 h-8 mr-2 rounded-full ring-2 ring-gray-400">
                                    <x-icons name="plus" />
                                </button>
                                <button class="flex items-center justify-center w-8 h-8 mr-2 rounded-full ring-2 ring-gray-400">
                                    <x-icons name="hand-thumbs-up" />
                                </button>
                                <button class="flex items-center justify-center w-8 h-8 mr-8 rounded-full ring-2 ring-gray-400">
                                    <x-icons name="hand-thumbs-down" />
                                </button>
                            </div>

                            <div class="flex my-4">
                                <div class="w-4/6">
                                    <span class="flex mb-3 space-x-4">
                                        <p class="font-bold text-green-500">{{ $movie['vote_average'] * 10 . '%' }} Match</p>
                                        <p>2021</p>
                                    </span>

                                    <span>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, voluptates.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, voluptatum?
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, nulla.
                                    </span>
                                    <span>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, voluptates.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, voluptatum?
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, nulla.
                                    </span>
                                    <span>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, voluptates.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, voluptatum?
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, nulla.
                                    </span>
                                    <span>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, voluptates.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, voluptatum?
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, nulla.
                                    </span>
                                </div>

                                <div class="w-2/6">
                                    <span class="flex mb-3 text-gray-500">
                                        Cast:
                                    </span>
                                    <span class="text-gray-500">
                                        Genres:
                                        @foreach ($movie['genre_ids'] as $genre)
                                        {{-- @dump($genre) --}}
                                            &middot;
                                            {{ $genres->get($genre)}}
                                        @endforeach
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </section>
    <!-- End Animation Movies -->


</div>
