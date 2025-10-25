<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $nama = "Ndus";
        $koleksi = ["Tas", "Koper", "Sepatu", "Baju"];
        return view("home", ["name" => $nama, "koleksi" => $koleksi]);
    }

    public function gallery()
    {        
        return view("gallery");
    }
    
    public function profile($name)
    {
        return view("profile", ["name" => $name]);
    }

    public function terimaGallery(Request $request) {
        $kode = $request->input("kode");
        $gambar = $request->input("gambar");
        return $kode. " : " .$gambar;
    }
}