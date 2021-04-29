<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class VelflixController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $popular = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/movie/popular')
        ->json()['results'];

        $trending = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/trending/movie/day')
        ->json()['results'];

        $velflixgenres = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/genre/movie/list')
        ->json()['genres'];
        // dd($velflixgenres);

        $comedies = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/discover/movie?api_key=MY_API_KEY&with_genres=35')
        ->json()['results'];
        // dd($comedies);

        $action = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/discover/movie?api_key=MY_API_KEY&with_genres=28')
        ->json()['results'];
        // dd($action);

        $western = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/discover/movie?api_key=MY_API_KEY&with_genres=37')
        ->json()['results'];
        // dd($western);

        $horror = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/discover/movie?api_key=MY_API_KEY&with_genres=27')
        ->json()['results'];
        // dd($horror);

        $thriller = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/discover/movie?api_key=MY_API_KEY&with_genres=53')
        ->json()['results'];
        // dd($thriller);

        $animation = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/discover/movie?api_key=MY_API_KEY&with_genres=16')
        ->json()['results'];
        // dd($animation);


        $genres = collect($velflixgenres)->mapWithKeys(function ($genre) {
            return [ $genre['id'] => $genre['name'] ];
        });
        // dd($genres);


        return view('layouts.app', [
            'velflix' => $popular,
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $playMovie = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/' . $id . '?append_to_response=credits,videos,images')
            ->json();

        return view('movies.show', [
            'movies' => $playMovie,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
