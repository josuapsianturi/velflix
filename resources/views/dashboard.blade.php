<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>
<body class="text-white bg-black">

<nav>
    <div class="relative flex flex-col bg-gray-300">
        <img class="absolute top-0 bottom-0 z-0 object-cover w-full h-full"
            src="https://assets.nflxext.com/ffe/siteui/vlv3/e178a4e7-4f52-4661-b2ae-41efa25dca7c/60dd20cf-7213-48a1-b253-6484d62d96a8/IN-en-20210222-popsignuptwoweeks-perspective_alpha_website_small.jpg"
            alt="">
        <div class="absolute top-0 bottom-0 left-0 right-0 z-10 w-full h-full bg-black opacity-60"></div>

        <div class="z-30 flex flex-row justify-between px-12 py-4">
            <div class="text-2xl font-bold text-red-600 uppercase">
               Netflix
            </div>
            <div class="px-4 py-1 text-white bg-red-600 rounded cursor-pointer">
                Sign In
            </div>
        </div>
        <div class="z-30 flex flex-col items-center justify-center py-48 text-white lg:py-32">
            <h1 class="w-full px-12 text-4xl font-bold text-center lg:px-0 lg:text-6xl md:w-1/2">Unlimited movies,
                TV shows and more.</h1>
            <p class="px-12 mt-6 text-xl text-center md:text-2xl">Watch anywhere. Cancel anytime.</p>
            @include('layouts.partials.register')
        </div>
</nav>

<div class="w-full h-3 bg-gray-800"></div>
<section>
    <div class="flex justify-center p-12 full">
        <div class="flex flex-col items-center justify-center w-3/5">
            <div>
                <div class="text-4xl">Enjoy on your TV.</div>
                <div class="text-2xl">
                    watch on Smart TV, Playstation, Xbox, Chromecast, Apple TV, Blu-ray players, and more.
                </div>
            </div>
        </div>
        <img width="600" src="{{ asset('img/img1.png') }}" />
</section>


</body>
</html>
