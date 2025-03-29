<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'welcome'])->name ('welcome');
Route::get('/create/post', [PostController::class, 'create'])->name ('create.post');
Route::post('/create/post/store', [PostController::class, 'store'])->name ('store.post');
Route::get('/tutti-i-viaggi', [PostController::class, 'index'])->name ('index.post');
Route::get('/dettaglio-viaggio/{id}', [PostController::class, 'show'])->name ('show.post');