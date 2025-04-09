<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PublicController;
// use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContinentController;

// home
Route::get('/', [PublicController::class, 'welcome'])->name ('welcome');
Route::get('/about-us', [PublicController::class, 'about'])->name ('about');
// Route::get('/l', [ArticleController::class, 'index'])->name ('homepage');
// Route::get('/create', [ArticleController::class, 'create'])->name ('article.create');
// Route::post('create/submit', [ArticleController::class, 'store'])->name('article.store');
Route::get('/continenti', [ContinentController::class, 'index'])->name ('continents.index');
Route::get('/continenti/edit/{continent}', [ContinentController::class, 'edit'])->name ('continents.edit');
Route::get('/continenti/create', [ContinentController::class, 'create'])->name ('continents.create');
Route::post('/continenti/submit', [ContinentController::class, 'store'])->name('continents.store');
Route::put('/continenti/update/{continent}', [ContinentController::class, 'update'])->name('continents.update');

Route::delete('/continenti/delete/{continent}', [ContinentController::class, 'destroy'])->name('continents.delete');

// contatti
Route::get('/contattaci', [PublicController::class, 'contact'])->name ('contattaci');
Route::post('/contattaci/submit', [PublicController::class, 'contactStore'])->name ('contattaci.store');

// viaggi
Route::get('/create/post', [PostController::class, 'create'])->name ('create.post');
Route::get('/dettaglio-viaggio/{id}', [PostController::class, 'show'])->name ('show.post');
Route::post('/create/post/store', [PostController::class, 'store'])->name ('store.post');


Route::get('/dettaglio-viaggio/edit/{id}', [PostController::class, 'edit'])->name ('edit.post');
Route::get('/tutti-i-viaggi', [PostController::class, 'index'])->name ('index.post');


Route::put('/dettaglio-viaggio/update/{id}', [PostController::class, 'update'])->name('post.update');

Route::delete('/dettaglio-viaggio/delete/{id}', [PostController::class, 'destroy'])->name('delete.post');

Route::get('/search/{continent}', [PostController::class, 'search'])->name('post.continent.search');