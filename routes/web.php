<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

// home
Route::get('/', [PublicController::class, 'welcome'])->name ('welcome');
// Route::get('/', [ArticleController::class, 'welcome'])->name ('welcome');
// Route::get('/create', [ArticleController::class, 'create'])->name ('article.create');
// Route::post('/create/submit', [ArticleController::class, 'store'])->name ('article.store');
Route::put('/dettaglio-viaggio/update/{id}', [PostController::class, 'update'])->name ('post.update');
Route::delete('/dettaglio-viaggio/delete/{id}', [PostController::class, 'destroy'])->name ('delete.post');

// contatti
Route::get('/contattaci', [PublicController::class, 'contact'])->name ('contattaci');
Route::post('/contattaci/submit', [PublicController::class, 'contactStore'])->name ('contattaci.store');

// viaggi
Route::get('/create/post', [PostController::class, 'create'])->name ('create.post');
Route::post('/create/post/store', [PostController::class, 'store'])->name ('store.post');
Route::get('/tutti-i-viaggi', [PostController::class, 'index'])->name ('index.post');
Route::get('/dettaglio-viaggio/{id}', [PostController::class, 'show'])->name ('show.post');
Route::get('/dettaglio-viaggio/edit/{id}', [PostController::class, 'edit'])->name ('edit.post');

// registrati