<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumniController;

Route::get('/', [AlumniController::class, 'welcome']);
