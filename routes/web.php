<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BlogPostController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog-admin/create-post', function () {
    return view('create-post');
});

Auth::routes();
Route::get('/blog-admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/blog-admin', [BlogPostController::class, 'index'])->name('posts.index')->middleware('auth');
Route::post('/blog-admin', [BlogPostController::class, 'store'])->name('posts.store')->middleware('auth');
Route::get('/blog-admin/{id}', [BlogPostController::class, 'show'])->name('posts.show')->middleware('auth');


