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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

Route::get('/', function(){
    return view('home');
})->name('home');

Route::get('/story', [StoryController::class, 'index'])->name('story.index');
Route::middleware(['auth:sanctum', 'verified'])->get('/story/create', [StoryController::class, 'create'])->name('story.create');
Route::middleware(['auth:sanctum', 'verified'])->post('/story', [StoryController::class, 'store'])->name('story.store');
Route::get('/story/{id}', [StoryController::class, 'show'])->name('story.show');
Route::middleware(['auth:sanctum', 'verified'])->get('/story/{id}/edit', [StoryController::class, 'edit'])->name('story.edit');
Route::middleware(['auth:sanctum', 'verified'])->post('/story/{id}', [StoryController::class, 'update'])->name('story.update');
Route::middleware(['auth:sanctum', 'verified'])->get('/story/{id}/delete', [StoryController::class, 'destroy'])->name('story.destroy');

Route::middleware(['auth:sanctum', 'verified'])->post('/story/{id}/comment', [CommentController::class, 'store'])->name('comment.store');
