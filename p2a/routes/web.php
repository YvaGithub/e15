<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;



Route::get('/', [MenuController::class, 'welcome']);
Route::get('/search', [MenuController::class, 'search']);
Route::get('/contact', [MenuController::class, 'contact']);