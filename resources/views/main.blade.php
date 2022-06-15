<x-layout>
    <x-header />

    <x-nav :popular='$popular' />

    {{-- @include('movies.index') --}}
    <x-movies.index  :popular='$popular' :genres='$genres' :trending='$trending' :comedies='$comedies' :action='$action' :western='$western' :horror='$horror' :thriller='$thriller' :animation='$animation' />

    <x-footer />
</x-layout>
