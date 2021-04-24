<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchVelflix extends Component
{
    public $searchVelflix = '';

    public function render()
    {
        $searchVelflixResults = [];

        if (strlen($this->searchVelflix >= 3)) {
            $searchVelflixResults = Http::withToken(config('services.tmdb.token'))
                ->get('https://api.themoviedb.org/3/search/movie?query='.$this->searchVelflix)
                ->json()['results'];
        }

        // dump($searchVelflixResults);

        return view('livewire.search-velflix', [
            'searchVelflixResults' => collect($searchVelflixResults)->take(7),
        ]);
    }
}
