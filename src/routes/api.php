<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('login', 'PassportController@login');
Route::post('register', 'PassportController@register');
 
Route::middleware('auth:api')->group(function () {
    Route::get('user', 'PassportController@details');
    Route::get('logout', 'AuthController@logout');

    //Route::get('listAvailableMovies','MovieController@listAvailableMovies');
    Route::get('listFavoriteMovies','MovieController@listFavoriteMovies');
    Route::post('saveFavoriteMovie','MovieController@saveFavoriteMovie');
    Route::delete('deleteFavoriteMovie','MovieController@deleteFavoriteMovie');
    Route::get('getmovies','MovieController@getMoviesFromApi');
});