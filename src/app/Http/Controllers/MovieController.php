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


    /**
     * get all movies from the API
     * 
     * will return all movies of the API
     * 
     * @param [Authentication] Bearer [token]
     * @return \Illuminate\Http\JsonResponse 
    */
    public function getMoviesFromApi(Request $request)
    {
        $response = Curl::to('https://api.themoviedb.org/3/search/movie?api_key=f320b984c382e38c4c7498681b9d3c7d&language=en-US&query=all&page=1&include_adult=false')->get();
        return response()->json(['movies' => json_decode($response)], 200);
    }


    /**
     * list farorite movies of the user
     * 
     * will return  a list with all favorite movies of the API
     * 
     * @param [Authentication] Bearer [token]
     * @return \Illuminate\Http\JsonResponse 
    */
    public function listFavoriteMovies(Request $request)
    {
        $movies = FavoriteMovie::where('idUser', auth()->user()->id)->get();
        return response()->json(['movies' => $movies], 200);
    }

    /**
     * save a farorite movies
     * 
     * will return the same object on json
     * 
     * @param [Authentication] Bearer [token]
     * @param [integer] idMovie
     * @param [string] nameMovie
     * @return \Illuminate\Http\JsonResponse 
    */
    public function saveFavoriteMovie(Request $request) {

        // $validator = Validator::make($request->all(), [
        //     'name' => 'required',
        //     'email' => 'required',
        // ]);

        $favoriteMovie = new FavoriteMovie;

        $favoriteMovie->idUser = auth()->user()->id;
        $favoriteMovie->idMovie = $request->idMovie;
        $favoriteMovie->nameMovie = $request->nameMovie;

        $favoriteMovie->save();

        return response()->json(['favoriteMovie' => $favoriteMovie], 201);
    }
    /**
     * delete specific movie from favorite list of user
     * 
     * will return no content on json
     * 
     * @param [Authentication] Bearer [token]
     * @param [integer] idMovie
     * @return \Illuminate\Http\JsonResponse 
    */
    public function deleteFavoriteMovie(Request $request) {
        // $validator = Validator::make($request->all(), [
        //     '' => 'required',
        // ]);

        // if ($validator->fails()) {
        //     return response()->json(['error' => $validator->messages()->first()], 400); // impossivel fazer isso retornar o status code certo
        // }

        $favoriteMovie = FavoriteMovie::where([
            ['idMovie', '=', $request->idMovie],
            ['idUser', '=', auth()->user()->id]
        ]);

        $favoriteMovie->delete();
        return response()->json(['' => ''], 204);
    }
}
