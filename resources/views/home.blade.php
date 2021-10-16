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
<body class="text-white bg-black">

@include('partials.header')

<nav class="mt-16">
    <div class="relative flex flex-col bg-gray-300">
        <img class="absolute top-0 bottom-0 z-0 object-cover w-full h-full"
            src="https://assets.nflxext.com/ffe/siteui/vlv3/e178a4e7-4f52-4661-b2ae-41efa25dca7c/60dd20cf-7213-48a1-b253-6484d62d96a8/IN-en-20210222-popsignuptwoweeks-perspective_alpha_website_small.jpg"
            alt="">
        <div class="absolute top-0 bottom-0 left-0 right-0 z-10 w-full h-full bg-black opacity-60"></div>

        @auth
            <div class="z-30 flex flex-row justify-end px-12 py-4">
                <div class="px-4 py-1 text-white bg-red-600 rounded cursor-pointer">
                    <a href="{{ route('velflix.index') }}" clas="px-4 py-1 text-white bg-red-600 rounded cursor-pointer">
                        Watch Movie &rsaquo;
                    </a>
                </div>
            </div>
        @endauth

        <div class="z-30 flex flex-col items-center justify-center py-48 text-white lg:py-32">
            <h1 class="w-full px-12 text-4xl font-bold text-center lg:px-0 lg:text-6xl md:w-1/2">Unlimited movies,
                TV shows and more.</h1>
            <p class="px-12 mt-6 text-xl text-center md:text-2xl">Watch anywhere. Cancel anytime.</p>
            @include('partials.subscribe')
        </div>
</nav>

<div class="w-full h-3" style="background-color: #222"></div>

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

<div class="w-full h-3" style="background-color: #222"></div>

<section>
    <div class="flex justify-center p-12 full">
        <img width="600" src="{{ asset('img/img2.png') }}" />
        <div class="flex flex-col items-center justify-center w-3/5">
            <div>
                <div class="text-4xl">Download your shows to watch offline.</div>
                <div class="text-2xl">
                    Save your favorites easily and always have something to watch. </div>
            </div>
        </div>
</section>

<div class="w-full h-3" style="background-color: #222"></div>

<section>
    <div class="flex justify-center p-12 full">
        <div class="flex flex-col items-center justify-center w-3/5">
            <div>
                <div class="text-4xl">Watch everywhere.</div>
                <div class="text-2xl">
                    Stream unlimited movies and TV shows on your phone, tablet, laptop, and TV. </div>
            </div>
        </div>
        <img width="600" src="{{ asset('img/img3.png') }}" />
</section>

<div class="w-full h-3" style="background-color: #222"></div>

<!-- FAQ -->
<section>
    <div class="container px-4 mx-auto mt-12 text-center xl:px-64">
        <h2 class="text-5xl font-bold">Frequently Asked Questions</h2>
        <div x-data="{ active: 1, items: [
            { id: 1, title: 'What is Velflix?', answer: 'Velflix is a streaming service that offers a wide variety of award-winning TV shows, movies, anime, documentaries, and more on thousands of internet-connected devices. You can watch as much as you want, whenever you want without a single commercial – all for one low monthly price' },
            { id: 2, title: 'How much does Velflix cost?', answer: 'Watch Velflix on your smartphone, tablet, Smart TV, laptop, or streaming device, all for one fixed monthly fee. Plans range from IDR54,000 to IDR186,000 a month. No extra costs, no contracts.'},
            { id: 3, title: 'Where can I watch?', answer: 'Watch anywhere, anytime, on an unlimited number of devices. Sign in with your Velflix account to watch instantly on the web at Velflix.com from your personal computer or on any internet-connected device that offers the Velflix app, including smart TVs, smartphones, tablets, streaming media players and game consoles.'},
            { id: 4, title: 'How do I cancel?', answer: 'Velflix is flexible. There are no pesky contracts and no commitments. You can easily cancel your account online in two clicks. There are no cancellation fees – start or stop your account anytime.'},
            { id: 5, title: 'What can I watch on Velflix?', answer: 'Velflix has an extensive library of feature films, documentaries, TV shows, anime, award-winning Velflix originals, and more. Watch as much as you want, anytime you want.'},
            { id: 6, title: 'Is Velflix good for kids?', answer: 'The Netflix Kids experience is included in your membership to give parents control while kids enjoy family-friendly TV shows and movies in their own space. Kids profiles come with PIN-protected parental controls that let you restrict the maturity rating of content kids can watch and block specific titles you don’t want kids to see.'},
            ]}"class="space-y-4 "
            >
            <template x-for="{ id, title, answer } in items " :key="id" >
                <div x-data="{
                    get expanded() {
                        return this.active === this.id
                    },
                    set expanded(value) {
                        this.active = value ? this.id : null
                    },
                }" role="region" class="text-white border border-black" style="background-color: #303030">
                    <h2>
                        <button
                            @click="expanded = !expanded"
                            :aria-expanded="expanded"
                            class="flex items-center justify-between w-full px-6 py-3 text-xl font-bold tracking-wider"
                            >
                            <span x-text="title"></span>
                            <span x-show="expanded" aria-hidden="true" class="ml-4">&minus;</span>
                            <span x-show="!expanded" aria-hidden="true" class="ml-4">&plus;</span>
                        </button>
                    </h2>

                    <div x-show="expanded" x-collapse.duration.500ms>
                        <div x-text="answer" class="px-6 pb-4"></div>
                    </div>
                </div>
            </template>
        </div>
    </div>
</section>
<!-- End FAQ -->

<section class="z-30 flex flex-col items-center justify-center py-40 text-white lg:py-32">
    @include('partials.subscribe')
</section>

<div class="w-full h-3" style="background-color: #222"></div>

    @include('partials.footer')
</body>
</html>
