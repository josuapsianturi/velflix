<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Velflix</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="{{ mix('js/app.js') }}"></script>
</head>
<body class="bg-black">
    {{-- @dump($velflix) --}}
    {{-- @dump($genres) --}}

        @include('layouts.partials.header')

        @include('layouts.partials.nav')

        @include('movies.index')

        @include('layouts.partials.footer')

    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script></body>
</html>
