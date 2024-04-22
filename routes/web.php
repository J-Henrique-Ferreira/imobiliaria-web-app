<?php

use App\Http\Controllers\Site\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, "index"]);

Route::get('/product/{title}', [ProductController::class, "show"]);