<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MoviesAPIController extends Controller
{
    //
    public function apiMovies() {
        $movies = Movie::orderBy('id', 'DESC')->get();
        return response()->json([
            'success' => TRUE,
            'message' => 'Berhasil di Tampilkan',
            'data' => $movies
        ], 200);
    }

    public function apicreateMovies(Request $request) {
        $movies = Movie::create([
            'imdb_id' => $request->imdb,
            'title' => $request->title,
            'year' => $request->year,
            'genre' => $request->genre,
            'description' => $request->description,
            'poster' => $request->poster,
        ]);

        if ($movies) {
            return response()->json([
                'success' => TRUE,
                'message' => 'Berhasil di Simpan',
                'data' => $movies
            ], 201);
        } else {
            return response()->json([
                'success' => FALSE,
                'message' => 'Gagal di simpan',
                'data' => ''
            ], 400);
        }
    }

    public function apiupdateMovies(Request $request, $id) {
        $movie = Movie::find($id);

        $movie->imdb_id = $request->imdb;
        $movie->title = $request->title;
        $movie->year = $request->year;
        $movie->genre = $request->genre;
        $movie->description = $request->description;
        $movie->poster = $request->poster;
        $updated = $movie->save();

        if ($movie) {
            return response()->json([
                'success' => TRUE,
                'message' => 'Berhasil di Update',
                'data' => $updated
            ], 200);
        } else {
            return response()->json([
                'success' => FALSE,
                'message' => 'Gagal di Update',
                'data' => ''
            ], 400);
        }
    }

    public function apideleteMovies($id) {
        $movie = Movie::find($id);
        $deleted = $movie->delete();

        return response()->json([
            'success' => TRUE,
            'message' => 'Berhasil di Hapus',
            'data' => $deleted
        ], 200);
    }
}
