<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Velflix</title>
    <!-- Tailwind CDN -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <!-- Alpine Plugins -->
    <script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <!-- Alpine CDN -->
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<style>
    [x-cloak] { display: none !important; }
</style>
<body class="text-gray-100 bg-black">

<x-header />


<section class="text-xl text-white mt-96">
    This is Admin Page
</section>
</body>
</html>
