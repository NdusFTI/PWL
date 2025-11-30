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
            return redirect("/home")->with('alert', 'Login berhasil');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect("/")->with("alert", "Anda telah logout");
    }

    public function changePassword(Request $request){
        $user = Auth::user();

        if (!Auth::attempt(['email' => $user->email, 'password' => $request->currentPassword])) {
            return redirect("/change/password")->with("alert", "Password saat ini salah");
        }

        $user->update([
            'password' => bcrypt($request->newPassword)
        ]);

        return redirect("/home")->with("alert", "Password berhasil diubah");
    }
}
