<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Movie;

class PageController extends Controller
{
    public function home(){
        return view("home", ["key" => "home"]);
    }

    public function movie(){
        $movies = Movie::orderBy('id', 'desc')->get();
        return view("movie", ["key" => "movie", "mv" => $movies]);
    }

    public function genre(){
        return view("genre", ["key" => "genre"]);
    }

    public function movieForm(){
        return view("movieForm", ["key" => "movieForm"]);
    }
    
    public function addMovie(Request $request){
        if($request->hasFile('poster')){
            $file_name = time() . '_' . $request->file('poster')->getClientOriginalName();
            $path = $request->file('poster')->storeAs('poster', $file_name, 'public');
        } else {
            $file_name = null;
            $path = null;
        }
        
        Movie::create([
            'imdb_id' => $request->imdb,
            'title' => $request->title,
            'genre' => $request->genre,
            'year' => $request->year,
            'description' => $request->description,
            'poster' => $file_name,
        ]);

        return redirect('/movie');
    }

    public function editMovie($id){
        $movie = Movie::find($id);
        return view("editMovie", ["key" => "editMovie", "mv" => $movie]);
    }

    public function saveMovie(Request $request, $id){
        $movie = Movie::find($id);

        if ($request->hasFile("poster")){
            $file_name = time() . "_" . $request->file("poster")->getClientOriginalName();
            $path = $request->file("poster")->storeAs("poster", $file_name, "public");

            if ($movie->poster){
                Storage::disk('public')->delete("poster/" . $movie->poster);
            }

            $movie->poster = $file_name;
        }

        $movie->imdb_id = $request->imdb;
        $movie->title = $request->title;
        $movie->genre = $request->genre;
        $movie->year = $request->year;
        $movie->description = $request->description;
        $movie->save();

        return redirect('/movie');
    }

    public function deleteMovie($id){
        $movie = Movie::find($id);

        if ($movie->poster){
            Storage::disk('public')->delete("poster/" . $movie->poster);
        }

        $movie->delete();

        return redirect('/movie');
    }
}
