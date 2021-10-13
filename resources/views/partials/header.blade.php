<div class="fixed top-0 z-50 w-full text-white bg-black body-font">
    <div class="flex flex-col flex-wrap items-center p-5 px-16 md:flex-row">
        <a class="flex items-center mb-4 text-2xl font-bold text-red-600 uppercase title-font md:mb-0">
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
            @endauth

            @auth
                <span class="text-xs font-bold uppercase">Welcome, {{ auth()->user()->name }}!</span>
                <form action="/logout" method="post"
                    class="ml-6 text-sm">
                    @csrf

                    <button type="submit" class="font-bold">Log Out</button>
                </form>
            @else
                <a href="/register" class="text-xs font-bold uppercase">Regsiter</a>
                <a href="/login" class="text-xs font-bold uppercase">Log in</a>
            @endauth

            {{-- <button class="flex items-center">
                <img src="https://occ-0-58-64.1.nflxso.net/dnm/api/v6/0RO1pLmU93-gdXvuxd_iYjzPqkc/AAAABTw7t_oDR-SWh9ddj9kh9AlOqCabZMupMWano7R5wg9x1_KPjvABqKHNeCxcMddK7Ku9HsV6keglPmWPZeh0lKU.png?r=fcc"
                    alt="avatar">
                <x-bi-chevron-down  class="w-4 h-4 pl-1 text-white stroke-current " />
            </button> --}}
        </nav>
    </div>
</div>