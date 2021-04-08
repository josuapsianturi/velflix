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
<body>
    {{-- @dump($velflix) --}}

    <div>
        @include('layouts.partials.header')
    </div>

    <div>
        @include('layouts.partials.nav')
    </div>
    <div x-data="{ open: false }">
        <button @click="open = true">Open Dropdown</button>

        <ul
            x-show="open"
            @click.away="open = false"
        >
            Dropdown Body
        </ul>
    </div>
    <div class="bg-black">
        @include('layouts.partials.footer')
    </div>
</body>
</html>
