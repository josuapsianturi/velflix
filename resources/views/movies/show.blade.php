{{-- @dump($movies) --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>show movie</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('js/app.js') }}"></script>
</head>
<body class="bg-gray-700">

<div class="fixed top-0 left-0 flex items-center w-full h-full overflow-y-auto shadow-lg">
    <div class="container mx-auto overflow-y-auto rounded-lg lg:px-56">
        <div class="bg-black rounded-xl">
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
                            <x-bi-caret-right-fill class="w-6 h-6 text-black" />
                            <span class="font-semibold text-black">Play</span>
                        </button>
                        <button class="flex items-center justify-center w-8 h-8 mr-2 rounded-full ring-2 ring-gray-400">
                            <x-bi-plus class="w-4 h-4 text-white" />
                        </button>
                        <button class="flex items-center justify-center w-8 h-8 mr-2 rounded-full ring-2 ring-gray-400">
                            <x-bi-hand-thumbs-up class="w-4 h-4 text-white" />
                        </button>
                        <button class="flex items-center justify-center w-8 h-8 mr-8 rounded-full ring-2 ring-gray-400">
                            <x-bi-hand-thumbs-down class="w-4 h-4 text-white" />
                        </button>
                    </div>

                    <div class="flex my-4">
                        <div class="w-4/6">
                            <span class="flex mb-3 space-x-4">
                                <p class="font-bold text-green-500">{{ $movies['vote_average'] * 10 . '%' }} Match</p>
                                <p>{{ date('Y', strtotime($movies['release_date'] )) }}</p>
                            </span>

                            <span>
                                {{ $movies['overview'] }}
                            </span>
                        </div>

                        <div class="w-2/6">
                            <span class="flex mb-3 text-gray-500">
                                Cast:
                            </span>
                            <span class="text-gray-500">
                                Genres:
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
