<div class="container p-4 mx-auto">
    <!-- Popular Movies -->
    <x-movies>
        <x-slot:category> Popular on Velflix &rsaquo; </x-slot:category>

        @foreach ($popular as $movie)
            <x-velflix-card :movie="$movie" :genres="$genres" />
        @endforeach
    </x-movies>
    <!-- End Popular Movies -->

    <!-- Trending Movies -->
    <x-movies>
        <x-slot:category> Trending on Velflix &rsaquo; </x-slot:category>

        @foreach ($trending as $movie)
            <x-velflix-card :movie="$movie" :genres="$genres" />
        @endforeach
    </x-movies>
    <!-- End Trending Movies -->

    <!-- Comedies Movies -->
    <x-movies>
        <x-slot:category> Comedies &rsaquo; </x-slot:category>

        @foreach ($comedies as $movie)
            <x-velflix-card :movie="$movie" :genres="$genres" />
        @endforeach
    </x-movies>
    <!-- End Comedies Movies -->

    <!-- Action Movies -->
    <x-movies>
        <x-slot:category> Action &rsaquo; </x-slot:category>

        @foreach ($action as $movie)
            <x-velflix-card :movie="$movie" :genres="$genres" />
        @endforeach
    </x-movies>
    <!-- End Action Movies -->

    <!-- Western Movies -->
    <x-movies>
        <x-slot:category> Western &rsaquo; </x-slot:category>

        @foreach ($western as $movie)
            <x-velflix-card :movie="$movie" :genres="$genres" />
        @endforeach
    </x-movies>
    <!-- End Wester Movies -->

    <!-- Horror Movies -->
    <x-movies>
        <x-slot:category> Horror &rsaquo; </x-slot:category>

        @foreach ($horror as $movie)
            <x-velflix-card :movie="$movie" :genres="$genres" />
        @endforeach
    </x-movies>
    <!-- End Horror Movies -->

    <!-- Animation Movies -->
    <x-movies>
        <x-slot:category> Animation &rsaquo; </x-slot:category>

        @foreach ($animation as $movie)
            <x-velflix-card :movie="$movie" :genres="$genres" />
        @endforeach
    </x-movies>
    <!-- End Animation Movies -->
</div>
