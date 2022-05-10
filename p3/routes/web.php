<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\PracticeController;


Route::get('/practice', [PracticeController::class, 'index']);
Route::get('/', [AlumniController::class, 'home']);
#Route::get('/create', [AlumniController::class, 'create']);
#Route::post('/register', [AlumniController::class, 'store']);
Route::get('/members', [AlumniController::class, 'index'])->middleware('auth');
Route::get('/about', [AlumniController::class, 'about']);
Route::get('/contact', [AlumniController::class, 'contact']);
Route::get('/members/{email}', [AlumniController::class, 'show']);
Route::get('/members/{email}/edit', [AlumniController::class, 'edit'])->middleware('auth');
Route::put('/members/{email}', [AlumniController::class, 'update']);


