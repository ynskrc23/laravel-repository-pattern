<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 'auth'], function () {
    Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
    Route::post('/doLogin', [AuthController::class, 'doLogin'])->name('auth.doLogin');
    Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
});

Route::get('/dashboard', function () {
    dd('Dashboard!');
})->name('dashboard');

Route::group(['prefix' => 'blog'], function () {
    Route::get('/all-blogs', [BlogController::class, 'getBlogs'])->name('blog.all');
    Route::post('/store-blog', [BlogController::class, 'store'])->name('blog.store');
    Route::get('/delete-blog/{blog}', [BlogController::class, 'delete'])->name('blog.delete');
});

Route::group(['prefix' => 'user'], function () {
    Route::get('/all-users', [UserController::class, 'all'])->name('user.all');
    Route::post('/store-user', [UserController::class, 'store'])->name('user.store');
    Route::get('/delete-user/{user}', [UserController::class, 'delete'])->name('user.delete');
});
