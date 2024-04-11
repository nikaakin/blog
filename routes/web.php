<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\MigrationController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/blog/create', 'blog.create')->name('blog.create');
Route::post('/blog', [BlogController::class, 'store'])->name('blog.store');
Route::get('/migrate-up-' . env("MIGRATION_KEY"), [MigrationController::class, 'up']);
Route::get('/migrate-fresh-' . env("MIGRATION_KEY"), [MigrationController::class, 'fresh']);