@props(['popular'])

<section class="relative h-screen w-full bg-black">
    <div class="absolute z-10 h-full w-full">
        <div class="flex h-full items-center justify-start px-16">
            <div class="hidden w-2/5 flex-col space-y-4 py-12 lg:flex">
                <h1 class="text-6xl font-semibold text-yellow-300">
                    {{ $popular[0]['title'] }}
                </h1>
                <p class="text-lg font-semibold text-white">
                    {{ $popular[0]['overview'] }}
                </p>
                <div class="flex w-full flex-row space-x-4">
                    <button
                        class="bg-gradient mt-5 flex w-28 items-center justify-center space-x-2 rounded bg-white px-2 py-2 shadow-md">
                        <x-bi-caret-right-fill class="h-6 w-6" />
                        <span class="font-semibold text-gray-800">Play</span>
                    </button>
                    <button
                        class="mt-5 flex w-36 items-center justify-center space-x-2 rounded-lg bg-gray-500 bg-opacity-50 px-3 py-2 font-semibold shadow-md">
                        <x-bi-info-circle class="h-5 w-5 font-bold text-white" />
                        <span class="font-semibold text-white">More Info</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="absolute bottom-0 h-64 w-full bg-gradient-to-t from-black"></div>

    <div class="-mt-8 object-cover lg:h-screen">
        <img class="h-screen w-screen object-contain"
        src="{{ 'https://image.tmdb.org/t/p/w500/' . $popular[0]['poster_path'] }}">
    </div>
</section>
