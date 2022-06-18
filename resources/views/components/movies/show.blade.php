
<x-layout>
    <div class="flex pt-4 items-center w-full h-full overflow-y-auto shadow-lg">
        <div class="container mx-auto overflow-y-auto rounded-lg lg:px-56">
            <div class="bg-gray-800 rounded-xl">
                <div class="relative overflow-hidden responsive-container" style="padding-top: 56.25%">
                    <iframe class="absolute top-0 left-0 w-full h-full rounded-t-xl responsive-iframe"
                        src="https://www.youtube.com/embed/{{ $movies['videos']['results'][0]['key'] }}"
                        style="border:0;" allow="autoplay; encrypted-media" allowfullscreen>
                    </iframe>
                </div>

                <div class="px-8 py-3 modal-body">
                    <div class="relative overflow-hidden text-white responsive-container">
                        <div class="flex flex-row w-full my-4 space-x-4">
                            <button class="flex items-center justify-center px-2 py-2 space-x-2 bg-white rounded shadow-md bg-gradient w-28 ">
                                <x-bi-caret-right-fill class="w-6 h-6 text-black"/>
                                <span class="font-semibold text-black">Play</span>
                            </button>
                            <button class="flex items-center justify-center w-8 h-8 mr-2 rounded-full ring-2 ring-gray-400">
                                <x-bi-plus class="w-4 h-4 text-white"/>
                            </button>
                            <button class="flex items-center justify-center w-8 h-8 mr-2 rounded-full ring-2 ring-gray-400">
                                <x-bi-hand-thumbs-up class="w-4 h-4 text-white"/>
                            </button>
                            <button class="flex items-center justify-center w-8 h-8 mr-8 rounded-full ring-2 ring-gray-400">
                                <x-bi-hand-thumbs-down class="w-4 h-4 text-white" />
                            </button>
                        </div>

                        <div class="flex my-6">
                            <div class="w-4/6">
                                <span class="flex mb-3 space-x-4">
                                    <div class="flex items-center">
                                        <div id="vote_average" class="relative w-16 h-16 text-white bg-gray-800 rounded-full">
                                            {{-- @push('scripts')
                                                <x-rating-script :slug="'vote_average'" :rating="$movies['vote_average'] * 10" :event='null' />
                                            @endpush --}}
                                            <div class="flex mx-4">
                                                <span class="font-bold text-green-500">{{ $movies['vote_average'] * 10 . '%' }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <div class="font-semibold text-white">{{ $movies['original_title'] }}</div>
                                        <div class="text-sm text-gray-500">{{ date('Y', strtotime($movies['release_date'] )) }}</div>
                                    </div>
                                </span>

                                <span>
                                    {{ $movies['overview'] }}
                                </span>
                            </div>

                            <div class="w-2/6">
                                <span class="text-gray-500">
                                    Cast:
                                    <span class="flex text-sm font-medium text-gray-400 truncate">
                                        @foreach ($movies['credits']['cast'] as $cast)
                                            <div class="">
                                                {{ $cast['name'] }},
                                            </div>
                                        @endforeach
                                    </span>

                                </span>
                                <span class="text-gray-500">
                                    Genres:
                                    <span class="flex text-sm font-medium text-gray-400 truncate">
                                        @foreach ($movies['genres'] as $genre)
                                            <div class="">
                                                {{ $genre['name'] }},
                                            </div>
                                        @endforeach
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>

