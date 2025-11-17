<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Movie;
use App\User;

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

        return redirect('/movie')->with('alert', 'Movie berhasil ditambahkan!');
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

        return redirect('/movie')->with('alert', 'Movie berhasil diupdate!');
    }

    public function deleteMovie($id){
        $movie = Movie::find($id);

        if ($movie->poster){
            Storage::disk('public')->delete("poster/" . $movie->poster);
        }

        $movie->delete();

        return redirect('/movie')->with('alert', 'Movie berhasil dihapus!');
    }

    public function users(){
        $users = User::orderBy('id', 'desc')->get();
        return view("users", ["key" => "users", "u" => $users]);
    }

    public function userForm(){
        return view("userForm", ["key" => "userForm"]);
    }

    public function addUser(Request $request){
        if ($request->hasFile('photo')){
            $file_name = time() . '_' . $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('photo', $file_name, 'public');
        } else {
            $file_name = null;
            $path = null;
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'photo' => $file_name,
        ]);

        return redirect('/users')->with('alert', 'User berhasil ditambahkan!');
    }

    public function deleteUser($id){
        $user = User::find($id);

        if ($user->photo){
            Storage::disk('public')->delete("photo/" . $user->photo);
        }

        $user->delete();

        return redirect('/users')->with('alert', 'User berhasil dihapus!');
    }
}
