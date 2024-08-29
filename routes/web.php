<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/catalog/{categories}', [\App\Http\Controllers\CatalogController::class, 'index'])
    ->where('categories', '^(?!.*\/\/)([a-zA-Z0-9\-\/]+)$')
    ->name('catalog');
