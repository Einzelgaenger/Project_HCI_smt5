<?php

use Illuminate\Support\Facades\Route;

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
});
