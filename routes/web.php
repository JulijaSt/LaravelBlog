<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BlogPostController;
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
// })->name('main');

Auth::routes();
Route::get('/blog-admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::middleware(['auth'])->group(function () {
    Route::get('/blog-admin/create-post', function () {
        return view('create-post');
    })->name('posts.create');

    Route::get('/blog-admin', [BlogPostController::class, 'index'])->name('posts.index');
    Route::post('/blog-admin', [BlogPostController::class, 'store'])->name('posts.store');
    Route::get('/blog-admin/{id}', [BlogPostController::class, 'show'])->name('posts.show');
    Route::delete('/blog-admin/{id}', [BlogPostController::class, 'destroy'])->name('posts.destroy');
    Route::put('/blog-admin/{id}', [BlogPostController::class, 'update'])->name('posts.update');
    Route::get('/blog-admin/edit-post/{id}', [BlogPostController::class, 'edit'])->name('posts.edit');
    Route::post('/blog-admin/{id}', [CommentController::class, 'store'])->name('comments.store');
    Route::delete('/blog-admin/{id}/comments/{commentid}', [CommentController::class, 'destroy'])->name('comments.destroy');
});

Route::get('/', [BlogPostController::class, 'publicIndex'])->name('main');
Route::get('posts/{id}', [BlogPostController::class, 'show'])->name('public.show');
Route::post('posts/{id}', [CommentController::class, 'store'])->name('comments.store');