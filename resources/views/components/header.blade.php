<div class="fixed top-0 z-50 w-full text-white bg-black body-font">
    <div class="flex flex-col flex-wrap items-center p-5 px-16 md:flex-row">
        <a class="flex items-center mb-4 text-2xl font-bold uppercase title-font md:mb-0" style="color: #e50914">
            Velflix
        </a>

        @auth
            <ul class="flex-row hidden w-1/2 ml-12 space-x-3 text-sm lg:flex">
                <li class="font-semibold">Home</li>
                <li>Series</li>
                <li>Films</li>
                <li>Latest</li>
                <li>My List</li>
                <li>Watch Again</li>
            </ul>
        @endauth

        <nav class="flex-wrap items-center justify-center hidden space-x-6 text-base font-bold md:ml-auto lg:flex">
            @auth
                <livewire:search-velflix />
                <x-bi-gift class="w-5 h-5" />
                <x-bi-bell-fill class="w-5 h-5" />
                {{-- <span class="text-xs font-bold uppercase">Welcome, {{ auth()->user()->name }}!</span> --}}

                <!-- User Profile  -->
                <div x-data="{ open: false }"
                class="relative inline-block"
                :class="{'text-gray-900': open, 'text-gray-600': !open }">
                <!-- Dropdown Toggle Button -->
                <button  @click="open = !open" @click.away="open = false" class="flex items-center">
                    <img src="https://occ-0-58-64.1.nflxso.net/dnm/api/v6/0RO1pLmU93-gdXvuxd_iYjzPqkc/AAAABTw7t_oDR-SWh9ddj9kh9AlOqCabZMupMWano7R5wg9x1_KPjvABqKHNeCxcMddK7Ku9HsV6keglPmWPZeh0lKU.png?r=fcc"
                        alt="avatar">
                    <span :class="open = ! open ? '': '-rotate-180'" class="transition-transform duration-500 transform ">
                        <x-bi-chevron-down
                        class="w-4 h-4 pl-1 text-white stroke-current " />
                    </span>
                </button>
                <!-- End Dropdown Toggle Button -->

                <!-- Dropdown Menu -->
                <div x-cloak x-show="open"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform scale-90"
                    x-transition:enter-end="opacity-100 transform scale-100"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 transform scale-100"
                    x-transition:leave-end="opacity-0 transform scale-90"
                    class="absolute right-0 text-gray-500 bg-white rounded-md shadow-xl min-w-max">
                    <form action="/logout" method="post"
                    class="">
                    @csrf

                    <button type="submit" class="block px-8 py-2 font-bold rounded-md hover:text-gray-600 hover:bg-gray-200">Log Out</button>
                    @can('admin')
                        <a href="/admin" class="block px-8 py-2 rounded-b-md hover:text-gray-600 hover:bg-gray-200">Admin Dashboard</a>
                    @endcan
                </form>
                </div>
            <!-- End User Profile -->
            </div>

            @else
                <!-- User Profile  -->
                <div x-data="{ open: false }"
                    class="relative inline-block"
                    :class="{'text-gray-900': open, 'text-gray-600': !open }">
                    <!-- Dropdown Toggle Button -->
                    <button  @click="open = !open" @click.away="open = false" class="flex items-center">
                        <img src="https://occ-0-58-64.1.nflxso.net/dnm/api/v6/0RO1pLmU93-gdXvuxd_iYjzPqkc/AAAABTw7t_oDR-SWh9ddj9kh9AlOqCabZMupMWano7R5wg9x1_KPjvABqKHNeCxcMddK7Ku9HsV6keglPmWPZeh0lKU.png?r=fcc"
                            alt="avatar">
                        <span :class="open = ! open ? '': '-rotate-180'" class="transition-transform duration-500 transform ">
                            <x-bi-chevron-down
                            class="w-4 h-4 pl-1 text-white stroke-current " />
                        </span>
                    </button>
                    <!-- End Dropdown Toggle Button -->

                    <!-- Dropdown Menu -->
                    <div x-cloak x-show="open"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform scale-90"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-90"
                        class="absolute right-0 text-gray-500 bg-white rounded-md shadow-xl min-w-max">
                        <a href="/register" class="block px-8 py-2 rounded-t-md hover:text-gray-600 hover:bg-gray-200">Regsiter</a>
                        <a href="/login" class="block px-8 py-2 rounded-b-md hover:text-gray-600 hover:bg-gray-200">Log in</a>
                    </div>
                <!-- End User Profile -->
                </div>
            @endauth
        </nav>
    </div>
</div>
