<x-layout>
    <x-header />

    <x-nav :popular='$popular' />

    @include('movies.index')

    <x-footer />
</x-layout>
