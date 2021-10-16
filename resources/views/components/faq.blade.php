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
            }" role="region" class="text-gray-100 border border-black" style="background-color: #303030">
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
