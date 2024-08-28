<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\UserController as AdminUserController;

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

Route::get('/home', function () {
    return view('welcome');
});






Route::group(['middleware' => ['auth']], function() {
    Route::resource('posts', PostController::class);
    Route::get('posts/{post}/delete', [PostController::class, 'delete'])->name('posts.delete');
    Route::put('/users/{user}/edit', [UserController::class, 'update'])->name('users.edit');
   // Route::get('/home', [PostController::class, 'index'])->name('home');
});

Route::prefix('admin')->middleware('admin')->group(function () {
    Route::resource('users', AdminUserController::class);
    Route::resource('posts', AdminPostController::class);
    Route::get('users/{user}/delete', [AdminUserController::class, 'delete'])->name('users.delete');
});

Route::get('/test', [PostController::class, 'test']);




Auth::routes();


