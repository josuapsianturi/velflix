<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

/**
 * @psalm-suppress UndefinedClass
 */
class SearchVelflix extends Component
{
    public ?string $searchVelflix = '';

    /**
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function render()
    {
        $searchVelflixResults = [];

        // @phpstan-ignore-next-line
        if (strlen($this->searchVelflix >= 3)) {
            $searchVelflixResults = Http::withToken(config('services.tmdb.token'))
                ->get('https://api.themoviedb.org/3/search/movie?query='.$this->searchVelflix)
                ->json()['results'];
        }

        // dump($searchVelflixResults);

        return view('livewire.search-velflix', [
            // @phpstan-ignore-next-line
            'searchVelflixResults' => collect($searchVelflixResults)->take(7),
        ]);
    }
}
