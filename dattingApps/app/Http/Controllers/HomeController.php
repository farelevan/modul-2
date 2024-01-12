<?php
// app/Http/Controllers/HomeController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::where('id', '!=', auth()->id())->get();

        return view('home', compact('users'));
    }

    public function like(Request $request, $id)
    {
        $user = User::findOrFail($id);

        if ($request->action == 'like') {
            // Asumsi bahwa email pengguna dapat diakses melalui model User
            $userEmail = $user->email;

            // Redirect langsung ke email
            return Redirect::to("mailto:$userEmail")->send();
        } elseif ($request->action == 'dislike') {
            // Hapus pengguna dari kumpulan data jika tombol "Dislike" ditekan
            $user->delete();

            return redirect()->back()->with('alert-info', 'You disliked ' . $user->name);
        }

        return redirect()->back();
    }
}
