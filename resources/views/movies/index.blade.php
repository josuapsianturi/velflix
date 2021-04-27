{{-- @dump($velflix) --}}
{{-- @dump($genres) --}}
{{-- @dump($trending) --}}

<div class="container px-4 pt-16 mx-auto">
    <div class="popular-movies">
        <h2 class="text-lg antialiased font-bold tracking-wide text-gray-200">
            Popular on Velflix
        </h2>

        <div>
            <div x-data="{swiper: null}" x-init="swiper = new Swiper($refs.container, {
                loop: true,
                slidesPerView: 2,
                spaceBetween: 0,

                breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 0,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 0,
                },
                1024: {
                    slidesPerView: 5,
                    spaceBetween: 0,
                },
                },
            })" class="relative flex flex-row w-full mx-auto">

                <button class="absolute inset-y-0 left-0 z-10 text-center origin-center bg-black bg-opacity-50 w-14" @click="swiper.slidePrev()">
                    <x-bi-chevron-compact-left class="ml-5 text-white" />
                </button>

                <div class="swiper-container" x-ref="container">
                    <div class="text-white swiper-wrapper">
                        @foreach($velflix as $movie )
                            <x-velflix-card :movie="$movie" :genres="$genres" />
                        @endforeach
                    </div>
                </div>

                <button class="absolute inset-y-0 right-0 z-10 text-center origin-center bg-black bg-opacity-50 w-14" @click="swiper.slideNext()">
                    <x-bi-chevron-compact-right class="ml-5 text-white" />
                </button>
            </div>
        </div>
    </div>

    <div class="popular-movies">
        <h2 class="text-lg antialiased font-bold tracking-wide text-gray-200">
            Trending Now
        </h2>

        <div>
            <div x-data="{swiper: null}" x-init="swiper = new Swiper($refs.container, {
                loop: true,
                slidesPerView: 2,
                spaceBetween: 0,

                breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 0,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 0,
                },
                1024: {
                    slidesPerView: 5,
                    spaceBetween: 0,
                },
                },
            })" class="relative flex flex-row w-full mx-auto">

                <button class="absolute inset-y-0 left-0 z-10 text-center origin-center bg-black bg-opacity-50 w-14" @click="swiper.slidePrev()">
                    <x-bi-chevron-compact-left class="ml-5 text-white" />
                </button>

                <div class="swiper-container" x-ref="container">
                    <div class="text-white swiper-wrapper">
                        @foreach($trending as $movie )
                            <x-velflix-card :movie="$movie" :genres="$genres" />
                        @endforeach
                    </div>
                </div>

                <button class="absolute inset-y-0 right-0 z-10 text-center origin-center bg-black bg-opacity-50 w-14" @click="swiper.slideNext()">
                    <x-bi-chevron-compact-right class="ml-5 text-white" />
                </button>
            </div>
        </div>
    </div>

    <div class="popular-movies">
        <h2 class="text-lg antialiased font-bold tracking-wide text-gray-200">
            Comedies
        </h2>

        <div>
            <div x-data="{swiper: null}" x-init="swiper = new Swiper($refs.container, {
                loop: true,
                slidesPerView: 2,
                spaceBetween: 0,

                breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 0,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 0,
                },
                1024: {
                    slidesPerView: 5,
                    spaceBetween: 0,
                },
                },
            })" class="relative flex flex-row w-full mx-auto">

                <button class="absolute inset-y-0 left-0 z-10 text-center origin-center bg-black bg-opacity-50 w-14" @click="swiper.slidePrev()">
                    <x-bi-chevron-compact-left class="ml-5 text-white" />
                </button>

                <div class="swiper-container" x-ref="container">
                    <div class="text-white swiper-wrapper">
                        @foreach($comedies as $movie )
                            <x-velflix-card :movie="$movie" :genres="$genres" />
                        @endforeach
                    </div>
                </div>

                <button class="absolute inset-y-0 right-0 z-10 text-center origin-center bg-black bg-opacity-50 w-14" @click="swiper.slideNext()">
                    <x-bi-chevron-compact-right class="ml-5 text-white" />
                </button>
            </div>
        </div>
    </div>

    <div class="popular-movies">
        <h2 class="text-lg antialiased font-bold tracking-wide text-gray-200">
            Western Movies
        </h2>

        <div>
            <div x-data="{swiper: null}" x-init="swiper = new Swiper($refs.container, {
                loop: true,
                slidesPerView: 2,
                spaceBetween: 0,

                breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 0,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 0,
                },
                1024: {
                    slidesPerView: 5,
                    spaceBetween: 0,
                },
                },
            })" class="relative flex flex-row w-full mx-auto">

                <button class="absolute inset-y-0 left-0 z-10 text-center origin-center bg-black bg-opacity-50 w-14" @click="swiper.slidePrev()">
                    <x-bi-chevron-compact-left class="ml-5 text-white" />
                </button>

                <div class="swiper-container" x-ref="container">
                    <div class="text-white swiper-wrapper">
                        @foreach($western as $movie )
                            <x-velflix-card :movie="$movie" :genres="$genres" />
                        @endforeach
                    </div>
                </div>

                <button class="absolute inset-y-0 right-0 z-10 text-center origin-center bg-black bg-opacity-50 w-14" @click="swiper.slideNext()">
                    <x-bi-chevron-compact-right class="ml-5 text-white" />
                </button>
            </div>
        </div>
    </div>

    <div class="popular-movies">
        <h2 class="text-lg antialiased font-bold tracking-wide text-gray-200">
            Action
        </h2>

        <div>
            <div x-data="{swiper: null}" x-init="swiper = new Swiper($refs.container, {
                loop: true,
                slidesPerView: 2,
                spaceBetween: 0,

                breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 0,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 0,
                },
                1024: {
                    slidesPerView: 5,
                    spaceBetween: 0,
                },
                },
            })" class="relative flex flex-row w-full mx-auto">

                <button class="absolute inset-y-0 left-0 z-10 text-center origin-center bg-black bg-opacity-50 w-14" @click="swiper.slidePrev()">
                    <x-bi-chevron-compact-left class="ml-5 text-white" />
                </button>

                <div class="swiper-container" x-ref="container">
                    <div class="text-white swiper-wrapper">
                        @foreach($action as $movie )
                            <x-velflix-card :movie="$movie" :genres="$genres" />
                        @endforeach
                    </div>
                </div>

                <button class="absolute inset-y-0 right-0 z-10 text-center origin-center bg-black bg-opacity-50 w-14" @click="swiper.slideNext()">
                    <x-bi-chevron-compact-right class="ml-5 text-white" />
                </button>
            </div>
        </div>
    </div>

    <div class="popular-movies">
        <h2 class="text-lg antialiased font-bold tracking-wide text-gray-200">
            Horror Films
        </h2>

        <div>
            <div x-data="{swiper: null}" x-init="swiper = new Swiper($refs.container, {
                loop: true,
                slidesPerView: 2,
                spaceBetween: 0,

                breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 0,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 0,
                },
                1024: {
                    slidesPerView: 5,
                    spaceBetween: 0,
                },
                },
            })" class="relative flex flex-row w-full mx-auto">

                <button class="absolute inset-y-0 left-0 z-10 text-center origin-center bg-black bg-opacity-50 w-14" @click="swiper.slidePrev()">
                    <x-bi-chevron-compact-left class="ml-5 text-white" />
                </button>

                <div class="swiper-container" x-ref="container">
                    <div class="text-white swiper-wrapper">
                        @foreach($horror as $movie )
                            <x-velflix-card :movie="$movie" :genres="$genres" />
                        @endforeach
                    </div>
                </div>

                <button class="absolute inset-y-0 right-0 z-10 text-center origin-center bg-black bg-opacity-50 w-14" @click="swiper.slideNext()">
                    <x-bi-chevron-compact-right class="ml-5 text-white" />
                </button>
            </div>
        </div>
    </div>

    <div class="popular-movies">
        <h2 class="text-lg antialiased font-bold tracking-wide text-gray-200">
            Thrillers
        </h2>

        <div>
            <div x-data="{swiper: null}" x-init="swiper = new Swiper($refs.container, {
                loop: true,
                slidesPerView: 2,
                spaceBetween: 0,

                breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 0,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 0,
                },
                1024: {
                    slidesPerView: 5,
                    spaceBetween: 0,
                },
                },
            })" class="relative flex flex-row w-full mx-auto">

                <button class="absolute inset-y-0 left-0 z-10 text-center origin-center bg-black bg-opacity-50 w-14" @click="swiper.slidePrev()">
                    <x-bi-chevron-compact-left class="ml-5 text-white" />
                </button>

                <div class="swiper-container" x-ref="container">
                    <div class="text-white swiper-wrapper">
                        @foreach($thriller as $movie )
                            <x-velflix-card :movie="$movie" :genres="$genres" />
                        @endforeach
                    </div>
                </div>

                <button class="absolute inset-y-0 right-0 z-10 text-center origin-center bg-black bg-opacity-50 w-14" @click="swiper.slideNext()">
                    <x-bi-chevron-compact-right class="ml-5 text-white" />
                </button>
            </div>
        </div>
    </div>

</div>
