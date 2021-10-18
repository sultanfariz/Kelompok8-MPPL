<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoryController;

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

Route::get('/', [StoryController::class, 'index'])->name('story.index');
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/story', function () {
//     return view('stories');
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/story/{id}', 'StoryController@show')->name('story.show');
Route::get('/story', [StoryController::class, 'index'])->name('story.index');
Route::post('/story', [StoryController::class, 'store'])->name('story.store');
