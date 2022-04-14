<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumniCircle;

Route::get('/', [AlumniCircle::class, 'index']);
