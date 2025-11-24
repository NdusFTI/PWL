<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view("login");
    }

    public function checkLogin(Request $request){
        $email = $request->input("email");
        $password = $request->input("password");

        if (!Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect("/")->with("alert", "Email atau password salah");
        } else {
            return redirect("/home")->with('alert', 'Login berhasil, Selamat datang ' . Auth::user()->name);
        }
    }
}
