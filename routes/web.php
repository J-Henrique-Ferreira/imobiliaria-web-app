<?php

use App\Http\Controllers\Site\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', [ProductController::class, "index"]);

Route::get('/product/{code}/{title}', [ProductController::class, "show"]);

Route::get('/dashboard', [DashboardController::class, "index"]);
