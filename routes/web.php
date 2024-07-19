<?php

use App\Http\Controllers\Client\CategoryController;
use App\Http\Controllers\Client\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/posts', [HomeController::class, 'posts']);
Route::get('/post/{id}', [HomeController::class, 'show'])->name('post');
Route::get('/category/{id}', [CategoryController::class, 'index'])->name('category');

