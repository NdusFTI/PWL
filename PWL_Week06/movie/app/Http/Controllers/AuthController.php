<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    public function login(){
        return view("login");
    }

    public function checkLogin(Request $request){
        $email = $request->input("email");
        $password = $request->input("password");

        $user = User::where("email", $email)->first();
        if($user && password_verify($password, $user->password)){
            return redirect("/home")->with('alert', 'Login berhasil');
        } else {
            return redirect("/")->with("alert", "Email atau password salah");
        }
    }
}
