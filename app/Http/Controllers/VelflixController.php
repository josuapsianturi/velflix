<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class VelflixController extends Controller
{
    /**
     * @param  mixed  $genreId
     * @return mixed
     */
    private function getMoviesByGenre($genreId)
    {
        return Cache::remember('movies_genre_'.$genreId, 60 * 60, function () use ($genreId) {
            return Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/discover/movie', [
                'with_genres' => $genreId,
            ])->json()['results'];
        });
    }

    public function index(): View|Factory
    {
        $popular = Cache::remember('movies_popular', 60 * 60, function () {
            return Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/popular')
                ->json()['results'];
        });

        $trending = Cache::remember('movies_trending', 60 * 60, function () {
            return Http::withToken(config('services.tmdb.token'))
                ->get('https://api.themoviedb.org/3/trending/movie/day')
                ->json()['results'];
        });

        $velflixgenres = Cache::remember('movies_genres', 60 * 60, function () {
            return Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/genre/movie/list')
            ->json()['genres'];
        });

        $comedies = $this->getMoviesByGenre(35);
        $action = $this->getMoviesByGenre(28);
        $western = $this->getMoviesByGenre(37);
        $horror = $this->getMoviesByGenre(27);
        $thriller = $this->getMoviesByGenre(53);
        $animation = $this->getMoviesByGenre(16);

        /** @psalm-suppress UndefinedClass **/
        $genres = collect($velflixgenres)->mapWithKeys(function ($genre) {  /** @phpstan-ignore-line */
            return [$genre['id'] => $genre['name']];
        });

        return view('main', [
            'popular' => $popular,
            'genres' => $genres,
            'trending' => $trending,
            'comedies' => $comedies,
            'western' => $western,
            'action' => $action,
            'horror' => $horror,
            'thriller' => $thriller,
            'animation' => $animation,
        ]);
    }

    /**
     * @param  mixed  $id
     * @return View|Factory
     */
    public function show($id): View|Factory
    {
        $playMovie = Cache::remember('movie_'.$id, 3600, function () use ($id) {
            return Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/'.$id.'?append_to_response=credits,videos,images')
            ->json();
        });

        return view('components.movies.show', [
            'movies' => $playMovie,
        ]);
    }
}
