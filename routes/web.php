<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\forumController;
use App\Http\Controllers\syllabusController;
use App\Http\Controllers\forumStatusController;
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

Route::post('/store', [ForumController::class, 'store'])->name('storeForum');

Route::get('/syllabus/{id}', [syllabusController::class, 'syllabus'])->name('syllabus');
Route::post('/save/modules', [syllabusController::class, 'storeProgressModule'])->name('storeProgressModule');

Route::get('/course/{id}', [syllabusController::class, 'course'])->name('course');
Route::post('/course/mark-ongoing/{id}', [syllabusController::class, 'markOngoing'])->name('course.mark.ongoing');
Route::post('/course/mark-done/{id}', [syllabusController::class, 'markDone'])->name('course.mark.done');

Route::get('/about', function () {
    return view('about');
})->name("about");

Route::get('/profile', [userController::class, 'profile'])->name("profile");
Route::post('/profile/update', [userController::class, 'updateProfile'])->name("profile.update");


Route::get('/path-ongoing', [syllabusController::class, 'ViewPathOngoing'])->name('path.ongoing');


Route::prefix('forum')->group(function () {
    // View all forums
    Route::get('/', [ForumController::class, 'index'])->name("forum");;

    // Create a new forum (view page)
    // Route::get('/create', [CreateForumController::class, 'index'])->name('forum.create');

    Route::delete('/delete/{forumId}', [ForumController::class, 'destroy'])->name('forum.delete');


    // View a specific forum along with its comments and replies
    Route::get('/{forumId}', [ForumController::class, 'show'])->name('forum.show');

    // Add a comment to a forum
    Route::post('/{forumId}/comment', [ForumController::class, 'comment'])->name('comment.store');

    // Reply to a comment (if you need it as a separate route)
    Route::post('/{forumId}/comment/{commentId}/reply', [ForumController::class, 'store'])->name('reply.store');

    // Report Forum
    // Route::post('/report/{forumId}', [ReportController::class, 'reportForum'])->name('forum.report');

    // Like Forum
    // Route::post('/like/{forumId}', [forumStatusController::class, 'likeStatus'])->name('forum.like');
});
