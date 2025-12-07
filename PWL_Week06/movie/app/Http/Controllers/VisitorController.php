<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class VisitorController extends Controller
{
    //
    public function searchMovie() {
        return view('searchMovie');
    }

    public function actSearchMovie(Request $request) {
        $keyword = $request->input('keyword');
        $movies = Movie::where('title', 'like', '%' . $keyword . '%')->get();
        return view('actSearchMovie', ['movies' => $movies]);
    }
}
