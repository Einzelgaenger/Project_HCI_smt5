<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    //
    public function register(){
        return view('register');
    }

    public function add(Request $req){
        $req->validate([
            'username' => 'required|min3|max:30',
            'name' => 'required|min:3|max:30',
            'email' => 'required|email:dns',
            'password' => 'required|min:8|max:10',
        ]);

        User::create([
            'username' =>$req->username,
            'name' => $req->nama,
            'email' => $req->email,
            'password' => Hash::make($req->password),
        ]);

        return redirect('/home');
    }

    public function login(){
        return view('login');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/home');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
