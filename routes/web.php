<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ArtPostController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\ComicPostController;

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

Route::get('/', HomeController::class)->name('home');

Route::get('/blog', [BlogPostController::class, 'index'])->name('blog');

Route::get('/art', [ArtPostController::class, 'index'])->name('art');

Route::get('/comics', [ComicPostController::class, 'index'])->name('comics');

Route::get('/posts', [PostController::class, 'index'])->name('archive');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
