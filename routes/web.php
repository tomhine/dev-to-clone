<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('/latest', [PostController::class, 'latest'])->name('latest');

Route::get('/top', [PostController::class, 'index'])->name('top');

Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('posts.show');

Route::get('/new', [PostController::class, 'create'])->middleware(['auth'])->name('posts.create');

Route::post('/new', [PostController::class, 'store'])->middleware(['auth'])->name('posts.store');

Route::get('/search', [PostController::class, 'search'])->name('posts.search');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/sponsors', function () {
    return view('sponsors');
})->name('sponsors');

Route::get('/code-of-conduct', function () {
    return view('code-of-conduct');
})->name('code-of-conduct');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
