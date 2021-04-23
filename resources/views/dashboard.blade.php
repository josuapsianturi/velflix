<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}"></script>
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
               Velflix
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

<div class="w-full h-3 bg-gray-800"></div>
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

<div class="w-full h-3 bg-gray-800"></div>
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


<div class="w-full h-3 bg-gray-800"></div>
<article>
    <div class="container px-4 mx-auto mt-12 text-center xl:px-64">
        <h2 class="text-5xl font-bold">Frequently Asked Questions</h2>
        <div class="my-16 text-2xl leading-loose " x-data="{
                faqs: [
                    {
                        question: 'What is Velflix?',
                        answer: 'Velflix is a streaming service that offers a wide variety of award-winning TV shows, movies, anime, documentaries, and more on thousands of internet-connected devices. You can watch as much as you want, whenever you want without a single commercial – all for one low monthly price ',
                        isOpen: false,
                    },
                    {
                        question: 'How much does Velflix cost?',
                        answer: 'Watch Velflix on your smartphone, tablet, Smart TV, laptop, or streaming device, all for one fixed monthly fee. Plans range from IDR54,000 to IDR186,000 a month. No extra costs, no contracts.',
                        isOpen: false,
                    },
                    {
                        question: 'Where can I watch?',
                        answer: 'Watch anywhere, anytime, on an unlimited number of devices. Sign in with your Velflix account to watch instantly on the web at Velflix.com from your personal computer or on any internet-connected device that offers the Velflix app, including smart TVs, smartphones, tablets, streaming media players and game consoles.',
                        isOpen: false,
                    },
                    {
                        question: 'How do I cancel?',
                        answer: 'Velflix is flexible. There are no pesky contracts and no commitments. You can easily cancel your account online in two clicks. There are no cancellation fees – start or stop your account anytime.',
                        isOpen: false,
                    },
                    {
                        question: 'What can I watch on Velflix?',
                        answer: 'Velflix has an extensive library of feature films, documentaries, TV shows, anime, award-winning Velflix originals, and more. Watch as much as you want, anytime you want.',
                        isOpen: false,
                    },
                ]
            }">
            <template x-for="faq in faqs" :key="faq">
                <div class="px-4 text-left bg-gray-800">
                    <button @click="faq.isOpen = !faq.isOpen"
                        class="flex justify-between w-full p-4 px-4 mt-4 font-bold border-b border-black">
                        <div x-text="faq.question"></div>
                        <x-bi-plus x-show="!faq.isOpen" class="w-12 h-12" />
                        <x-bi-x x-show="faq.isOpen" class="w-12 h-12" />
                    </button>

                    <div class="px-4 mt-2 text-white origin-top transform" x-show="faq.isOpen"
                        x-transition:enter="transition-all ease-out duration-150"
                        x-transition:enter-start="opacity-0 scale-75" x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition-all ease-in duration-150"
                        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-75"
                        x-text="faq.answer">
                    </div>
                </div>
            </template>
        </div>
    </div>
</article>

</body>
</html>
