<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;



Route::get('/', [MenuController::class, 'welcome']);
Route::get('/', [MenuController::class, 'welcome']);
Route::get('/foods', [MenuController::class, 'search']);
Route::get('/contact', [MenuController::class, 'contact']);
Route::get('/foods/{name}', [MenuController::class, 'show']);