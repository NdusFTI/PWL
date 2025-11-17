<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/","PageController@home");
Route::get("/movie","PageController@movie");
Route::get("/genre","PageController@genre");
Route::get("/movie/form", "PageController@movieForm");
Route::post("/movie/add-movie", "PageController@addMovie");
Route::get("/movie/edit-movie/{id}", "PageController@editMovie");
Route::put("/movie/save-movie/{id}", "PageController@saveMovie");
Route::get("/movie/delete-movie/{id}", "PageController@deleteMovie");

Route::get("/users", "PageController@users");
Route::get("/users/form", "PageController@userForm");
Route::post("/users/add-user", "PageController@addUser");
Route::get("/users/delete-user/{id}", "PageController@deleteUser");