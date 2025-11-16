<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;




/* Link Pagine Home */
Route::get('/', [PublicController::class, 'home'])->name('Home');



/* Rotte protette per utenti autenticati */
Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});