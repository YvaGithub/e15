<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\PracticeController;


Route::get('/practice', [PracticeController::class, 'index']);
Route::get('/', [AlumniController::class, 'home']);
Route::get('/create', [AlumniController::class, 'create']);
Route::post('/members', [AlumniController::class, 'store']);
Route::get('/members', [AlumniController::class, 'index']);
Route::get('/about', [AlumniController::class, 'about']);
Route::get('/contact', [AlumniController::class, 'contact']);
Route::get('/members/{email}', [AlumniController::class, 'show']);
Route::get('/members/{email}/delete', [AlumniController::class, 'delete']);
Route::delete('/members/{email}', [AlumniController::class, 'destroy']);
