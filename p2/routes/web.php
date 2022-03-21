<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PageController;

    
Route::get('/', [PageController::class, 'welcome']);
Route::get('/contact', [PageController::class, 'contact']);

Route::get('/games', [GameController::class, 'index']);
Route::get('/games/{name}', [GameController::class, 'show']);
Route::get('/games/filter/{category}/{subcategory}', [GameController::class, 'filter']);

