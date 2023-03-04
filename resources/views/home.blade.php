<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Velflix</title>
    <!-- Tailwind CDN -->
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    @vite('resources/css/app.css')
    <!-- Alpine Plugins -->
    <script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <!-- Alpine CDN -->
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<style>
    [x-cloak] { display: none !important; }
</style>
<body class="bg-black text-gray-100">

<x-header />

<nav class="mt-16">
    <x-navbar />
</nav>

<x-gap />

<section>
    <div class="full flex justify-center p-12">
        <div class="flex w-3/5 flex-col items-center justify-center">
            <div>
                <div class="text-4xl">Enjoy on your TV.</div>
                <div class="text-2xl">
                    watch on Smart TV, Playstation, Xbox, Chromecast, Apple TV, Blu-ray players, and more.
                </div>
            </div>
        </div>
        <img width="600" src="{{ asset('img/img1.png') }}" />
    </div>
</section>

<x-gap />

<section>
    <div class="full flex justify-center p-12">
        <img width="600" src="{{ asset('img/img2.png') }}" />
        <div class="flex w-3/5 flex-col items-center justify-center">
            <div>
                <div class="text-4xl">Download your shows to watch offline.</div>
                <div class="text-2xl">
                    Save your favorites easily and always have something to watch. </div>
            </div>
        </div>
    </div>
</section>

<x-gap />

<section>
    <div class="full flex justify-center p-12">
        <div class="flex w-3/5 flex-col items-center justify-center">
            <div>
                <div class="text-4xl">Watch everywhere.</div>
                <div class="text-2xl">
                    Stream unlimited movies and TV shows on your phone, tablet, laptop, and TV. </div>
            </div>
        </div>
        <img width="600" src="{{ asset('img/img3.png') }}" />
</section>

<x-gap />

<!-- FAQ -->
<section>
    <x-faq />
</section>
<!-- End FAQ -->

<section class="z-30 flex flex-col items-center justify-center py-40 text-gray-100 lg:py-32">
    <x-newsletter />
</section>

<x-gap />

<x-footer />

<x-flash />
</body>
</html>
