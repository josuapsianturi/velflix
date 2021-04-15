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
            {{-- <div class="px-8 py-8 modal-body"> --}}
                <div class="relative overflow-hidden responsive-container" style="padding-top: 56.25%">
                    <iframe class="absolute top-0 left-0 w-full h-full rounded-xl responsive-iframe"
                        src="https://www.youtube.com/embed/{{ $movies['videos']['results'][0]['key'] }}"
                        style="border:0;" allow="autoplay; encrypted-media" allowfullscreen>
                    </iframe>
                </div>
            {{-- </div> --}}

            <div class="px-8 py-3 modal-body">
                <div class="relative overflow-hidden text-white responsive-container">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Labore omnis qui doloribus cupiditate tenetur accusamus earum placeat minus error sint enim,
                    sequi exercitationem, dolorem harum commodi voluptates. Sequi, deserunt minus.
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
