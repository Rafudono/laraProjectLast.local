<?php

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('posts');
Route::get('/post/{id}', [\App\Http\Controllers\HomeController::class, 'showPost'])->name('singlePost');
Route::get('/posts/byCategory/{id}', [\App\Http\Controllers\HomeController::class, 'showPostsByCategory'])->name('posts');
Route::get('/auth', [\App\Http\Controllers\AuthController::class, 'showAuthWin'])->name('authWin');

