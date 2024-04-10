<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/blog/create', 'blog.create')->name('blog.create');
Route::post('/blog', [BlogController::class, 'store'])->name('blog.store');
