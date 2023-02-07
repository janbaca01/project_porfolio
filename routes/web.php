<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
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


// auth
Auth::routes();

// home
Route::get('/', [PostController::class, 'index']);

// posts
Route::resource('posts', PostController::class);

//comments
Route::resource('comments', CommentController::class)->only([
    'store', 'update', 'destroy'
]);


