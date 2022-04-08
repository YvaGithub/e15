<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PracticeController;
use App\Http\Controllers\ListController;

Route::get('/', [PageController::class, 'index']);
Route::get('/support', [PageController::class, 'support']);

Route::get('/books', [BookController::class, 'index']);
Route::get('/seach', [BookController::class, 'search']);


Route::get('/books/{slug}', [BookController::class, 'show']);
Route::get('/books/create', [BookController::class, 'create']);

Route::post('/books', [BookController::class, 'store']);

Route::get('contact/', [PageController::class, 'contact']);
Route::get('books/filter/{category}/{subcategory}', [BookController::class, 'filter']);
Route::get('/list', [ListController::class, 'show']);
Route::any('/practice/{n?}', [PracticeController::class, 'index']);