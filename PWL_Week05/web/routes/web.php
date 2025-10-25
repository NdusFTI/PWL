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

// Cara tidak dianjurkan

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/gallery', function () {
//     return view('gallery');
// });

// Route::get('/profile', function () {
//     return view('profile');
// });

// Cara dianjurkan
Route::get("/home", "PageController@home");
Route::get("/gallery", "PageController@gallery");
Route::post("/gallery/kirim", "PageController@terimaGallery");
Route::get("/profile/{nama}", "PageController@profile");