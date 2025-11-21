<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;




/* Link Pagine Home */
Route::get('/', [PublicController::class, 'home'])->name('Home');



/* Rotte protette per utenti autenticati */
Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});



/* Rotta per creare un articolo */
Route::get('/create/article', [ArticleController::class, 'createArticle'])->name('article.create');