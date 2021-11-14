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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/story', function () {
//     return view('stories');
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     // $this->authorize('admin');
//     return view('dashboard');
// })->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

Route::get('/', [StoryController::class, 'index'])->name('story.index');
Route::get('/story', [StoryController::class, 'index'])->name('story.index');
Route::get('/story/create', [StoryController::class, 'create'])->name('story.create');
Route::post('/story', [StoryController::class, 'store'])->name('story.store');
Route::get('/story/{id}', [StoryController::class, 'show'])->name('story.show');
