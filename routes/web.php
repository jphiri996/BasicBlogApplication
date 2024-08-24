<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PostController as AdminPostController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => ['auth']], function() {
    Route::resource('posts', PostController::class);
    Route::get('posts/{post}/delete', [PostController::class, 'delete'])->name('posts.delete');
    Route::get('/home', [PostController::class, 'index'])->name('home');
});

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::resource('users', UserController::class);
    Route::resource('posts', AdminPostController::class);
});

Route::get('/test', [PostController::class, 'test']);

Auth::routes();