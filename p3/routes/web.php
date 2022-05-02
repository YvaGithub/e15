<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumniController;

Route::get('/', [AlumniController::class, 'index']);
Route::get('/create', [AlumniController::class, 'create']);

Route::post('/members', [AlumniController::class, 'store']);
Route::get('/about', [AlumniController::class, 'about']);
Route::get('/contact', [AlumniController::class, 'contact']);
