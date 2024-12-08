<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\forumController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/login', [userController::class, 'login'])->name("viewLogin");
Route::post('/authenticate', [userController::class, 'authenticate'])->name("login");

Route::get('/register', function () {return view('register');})->name("viewRegister");
Route::post('/register/user', [userController::class, 'add'])->name("register");

Route::get('/forum', function () {
    return view('forum');
})->name("forum");


Route::get('/', function () {
    return view('home');
})->name("home");

Route::get('/home', function () {
    return view('home');
})->name("home");

Route::get('/about', function () {
    return view('about');
})->name("about");
Route::get('/learn', function () {
    return view('learn');
})->name("learn");
Route::get('/forum', function () {
    return view('forum');
})->name("forum");

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
})->name("register");

Route::post('/register/user', [userController::class, 'register']);

Route::get('/syllabus', function (){
    return view('syllabus');
});

Route::get('/profile', function (){
    return view('profile');
});

Route::get('/learn', function (){
    return view('learn');
})->name('learn');

Route::get('/search', function (){
    return view('search');
})->name('search');

Route::get('/path-ongoing', function (){
    return view('path-ongoing');
})->name('path.ongoing');

Route::get('/resume-course', function (){
    return view('resume-course');
})->name('course');

// Forum Routes
Route::get('/forum', [forumController::class, 'index'])->name("forum"); // Change to 'forum'
Route::get('/reply', [forumController::class, 'reply'])->name("forum.reply"); // Route for the reply page
