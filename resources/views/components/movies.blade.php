<div class="">
<div class="mb-4 text-lg antialiased font-bold tracking-wider text-gray-200">
    {{ $category }}
</div>

<div class="carousel" data-flickity='{ "freeScroll": true, "wrapAround": true }'
    class="flex carousel flex-nowrap">
    {{ $slot}}
</div>
</div>
