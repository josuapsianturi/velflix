<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Velflix</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    {{-- @dump($velflix) --}}

    <div>
        @include('layouts.partial.header')
    </div>

    <div>
        @include('layouts.partial.nav')
    </div>
</body>
</html>
