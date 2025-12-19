<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AnimalController;

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::prefix('animal')->name('animal.')->group(function () {

    Route::get('/create', [AnimalController::class, 'create'])->name('create');

    Route::get('/{id}', [AnimalController::class, 'show'])->name('show')->whereNumber('id');

    Route::get('/{id}/update', [AnimalController::class, 'update'])->name('update');
    Route::get('/{id}/delete', [AnimalController::class, 'delete'])->name('delete');
});

Route::fallback(function () {
    return view('errors.404');
});
