<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function postlogin (Request $request) {
        if (Auth::attempt($request->only('username', 'password'))) {
            // Memeriksa apakah pengguna terotentikasi
            if (Auth::check()) {
                $user = Auth::user();

                if ($user->level == 'admin') {
                    // Redirect ke halaman admin jika level adalah 'admin'
                    return redirect('/index');
                } elseif ($user->level == 'user') {
                    // Redirect ke halaman user jika level adalah 'user'
                    return redirect('/index');
                } 
            }
        }
        return redirect('/');
    }

    public function logout (Request $request) {
        Auth::logout();
        return redirect ('/');
    }
}
