<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Syllabus;
use App\Models\Module;
use App\Models\Forum;
use App\Models\Ongoing;
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
            'username' => 'required|min:3|max:30',
            'name' => 'required|min:3|max:30',
            'email' => 'required',
            'password' => 'required|min:8|max:10',
        ]);

        User::create([
            'username' => $req->username,
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password),
        ]);

        return redirect('/login');
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

    public function home(){
        $user = Auth::user();

        if($user){
            $syllabi = Syllabus::with('course')->get();
            $forums = Forum::all();
            $ongoing = Ongoing::with('course')->where('user_id', $user->id)->first();

            return view('home', [
                'user' => $user,
                'syllabi' => $syllabi,
                'forums' => $forums,
                'ongoing' => $ongoing
            ]);
        } else {
            return redirect('/login');
        }
    }

    public function profile()
    {
        $user = Auth::user();

        if($user) {
            $ongoingCourses = Ongoing::with(['course.module'])->where('user_id', $user->id)->get();
            return view('profile', [
                'user' => $user,
                'ongoingCourses' => $ongoingCourses,
            ]);
        } else {
            return redirect('/login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function learn(){
        $user = Auth::user();
        $syllabi = Syllabus::with('course')->get();
        $forums = Forum::all();

        return view('learn', [
            'user' => $user,
            'syllabi' => $syllabi,
            'forums' => $forums,
        ]);
    }
}
