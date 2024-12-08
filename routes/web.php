<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\forumController;
use App\Http\Controllers\syllabusController;
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

Route::get('/register', [userController::class, 'register'])->name("viewRegister");
Route::post('/register/user', [userController::class, 'add'])->name("register");

Route::get('/home', [userController::class, 'home'])->name("home");
Route::get('/', [userController::class, 'home'])->name("home");

Route::get('/learn', [userController::class, 'learn'])->name('learn');

Route::post('/logout', [userController::class, 'logout'])->name("logout");

Route::get('/forum', [forumController::class, 'forum'])->name("forum");

Route::get('/syllabus/{id}', [syllabusController::class, 'syllabus'])->name('syllabus');
Route::post('/save/modules', [syllabusController::class, 'storeProgressModule'])->name('storeProgressModule');

Route::get('/about', function () {
    return view('about');
})->name("about");
Route::get('/forum', function () {
    return view('forum');
})->name("forum");



Route::get('/profile', function (){
    return view('profile');
});



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
Route::get('/reply', [forumController::class, 'reply'])->name("forum.reply"); // Route for the reply page

Route::get('/view-course', function(){
    return view('view-course');
});