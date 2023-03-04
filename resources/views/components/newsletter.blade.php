<p class="my-3 px-12 text-center">Want us to email you occasionally with Vetflix news?
</p>

<div class="relative mx-auto inline-block lg:bg-gray-100">

    <form method="POST" action="/newsletter" class="text-sm lg:flex">
        @csrf

        <div class="flex items-center lg:py-4 lg:px-12">
            <label for="email" class="hidden lg:inline-block">
                <img src="/img/mailbox-icon.svg" alt="mailbox letter">
            </label>

            <div>
                <input
                    id="email"
                    name="email"
                    type="text"
                    placeholder="Your email address"
                    class="py-3 pl-5 text-lg text-gray-500 focus-within:outline-none lg:bg-transparent lg:py-0">

                    @error('email')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror
            </div>
        </div>

        <button type="submit"
                class="flex items-center bg-red-600 py-2 px-14 text-xl text-white transition-colors duration-300 hover:bg-red-700 lg:mt-0 lg:ml-3"
            >
            Subscribe
            <span class="ml-2 w-6 p-1">
                <svg fill="currentColor" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.002 512.002"
                    style="enable-background:new 0 0 512.002 512.002;" xml:space="preserve">
                    <g>
                        <g>
                            <path
                                d="M388.425,241.951L151.609,5.79c-7.759-7.733-20.321-7.72-28.067,0.04c-7.74,7.759-7.72,20.328,0.04,28.067l222.72,222.105    L123.574,478.106c-7.759,7.74-7.779,20.301-0.04,28.061c3.883,3.89,8.97,5.835,14.057,5.835c5.074,0,10.141-1.932,14.017-5.795    l236.817-236.155c3.737-3.718,5.834-8.778,5.834-14.05S392.156,245.676,388.425,241.951z" />
                        </g>
                    </g>
                </svg>
            </span>
        </button>
    </form>
</div>

