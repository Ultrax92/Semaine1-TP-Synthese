<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AnimalController;

// Page d'accueil
Route::get('/', [IndexController::class, 'index'])->name('home');

// Routes pour les animaux
Route::get('/create', [AnimalController::class, 'create'])->name('animal.create');
Route::get('/animal/{id}', [AnimalController::class, 'show'])->name('animal.show');
Route::get('/animal/{id}/update', [AnimalController::class, 'update'])->name('animal.update');
Route::get('/animal/{id}/delete', [AnimalController::class, 'delete'])->name('animal.delete');

// Page 404
Route::fallback(function () {
    return view('errors.404');
});