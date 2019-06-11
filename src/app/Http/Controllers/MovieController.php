<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\FavoriteMovie;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Ixudra\Curl\Facades\Curl;


class MovieController extends Controller
{
    /**
     * get all movies from database
     * @param [Authentication] Bearer [token]
     * @return \Illuminate\Http\JsonResponse
    */
    
    public function listAvailableMovies(Request $request)
    {
        $movies = Movie::where([])->get();
        return response()->json(['movies' => $movies]);
    }

    public function getMoviesFromApi(Request $request)
    {
        $response = Curl::to('https://api.themoviedb.org/3/search/movie?api_key=f320b984c382e38c4c7498681b9d3c7d&language=en-US&query=all&page=1&include_adult=false')->get();

        return response()->json(['movies' => json_decode($response)]);
    }

    public function listFavoriteMovies(Request $request)
    {
        $movies = Movie::where(['idUser', '=', auth()->user()->id()])->get();
        return response()->json(['movies' => $movies]);
    }

    public function saveFavoriteMovie(Request $request) {
        $favoriteMovie = new FavoriteMovie;

        $favoriteMovie->idUser = auth()->user()->id();
        $favoriteMovie->idMovie = $request->idMovie;
        $favoriteMovie->nameMovie = $request->nameMovie;

        $favoriteMovie->save();

        return response()->json(['favoriteMovie' => $favoriteMovie], 201);
    }

    public function deleteFavoriteMovie(Request $request) {
        $favoriteMovie = FavoriteMovie::where([
            ['idMovie', '=', $request->idMovie],
            ['idUser', '=', auth()->user()->id()]
        ]);

        $favoriteMovie->delete();
        return response()->json(['' => ''], 204);
    }


}
