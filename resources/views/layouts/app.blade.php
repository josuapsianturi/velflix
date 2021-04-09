<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Velflix</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('js/app.js') }}"></script>
</head>
<body class="bg-black">
    {{-- @dump($velflix) --}}

        @include('layouts.partials.header')

        @include('layouts.partials.nav')

        @include('movies.index')

        @include('layouts.partials.footer')

</body>
</html>
