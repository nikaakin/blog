<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/blog/create', 'blog.create')->name('blog.create');
