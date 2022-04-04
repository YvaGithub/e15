<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PracticeController;


Route::any('/practice/{n?}', [PracticeController::class, 'index']);
Route::get('/books/create', [BookController::class, 'create']);
Route::post('/books', [BookController::class, 'store']);
#Route::get('/', [PageController::class, 'welcome']);
Route::get('/seach', [BookController::class, 'search']);
Route::get('contact/', [PageController::class, 'contact']);
Route::get('/books', [BookController::class, 'index']);
Route::get('/books/{slug}', [BookController::class, 'show']);
Route::get('books/filter/{category}/{subcategory}', [BookController::class, 'filter']);