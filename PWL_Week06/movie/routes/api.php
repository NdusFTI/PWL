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

Route::get('/v1/api/movies', 'MoviesApiController@apiMovies');
Route::post('/v1/api/createMovies', 'MoviesApiController@apicreateMovies');
Route::put('/v1/api/updateMovies/{id}', 'MoviesApiController@apiupdateMovies');
Route::delete('/v1/api/deleteMovies/{id}', 'MoviesApiController@apideleteMovies');