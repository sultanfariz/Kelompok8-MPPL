<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\CommentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard-admin', [AdminController::class, 'index'])->name('dashboard-admin');

// User Routes
Route::get('/', function(){
    return view('home');
});
Route::get('/home', function(){
    return view('home');
});
// Route::get('/signin', function(){return view('signin');});
// Route::post('/signin', [UserController::class, 'signin']);
// Route::get('/signup', function(){return view('signup');});
// Route::post('/signup', [UserController::class, 'signup']);

// Route::get('/', [StoryController::class, 'index'])->name('story.index');
// Route::get('/story', [StoryController::class, 'index'])->name('story.index');
Route::get('/collection', [StoryController::class, 'index'])->name('story.index');
Route::get('/story/create', [StoryController::class, 'create'])->name('story.create');
Route::post('/story', [StoryController::class, 'store'])->name('story.store');
Route::get('/story/{id}', [StoryController::class, 'show'])->name('story.show');
// Route::get('/book', function(){
//     return view('story-book');
// });
// Route::get('/collection', function(){
//     return view('collection');
// });
Route::get('/book', function(){
    return view('read-book');
});
