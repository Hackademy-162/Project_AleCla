<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PublicController;

// home
Route::get('/', [PublicController::class, 'welcome'])->name ('welcome');

// contatti
Route::get('/contattaci', [PublicController::class, 'contact'])->name ('contattaci');
Route::post('/contattaci/submit', [PublicController::class, 'contactStore'])->name ('contattaci.store');

// viaggi
Route::get('/create/post', [PostController::class, 'create'])->name ('create.post');
Route::post('/create/post/store', [PostController::class, 'store'])->name ('store.post');
Route::get('/tutti-i-viaggi', [PostController::class, 'index'])->name ('index.post');
Route::get('/dettaglio-viaggio/{id}', [PostController::class, 'show'])->name ('show.post');

// registrati