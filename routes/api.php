<?php

use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\ReplySupportApiController;
use App\Http\Controllers\Api\SiteController;
use App\Http\Controllers\Api\SupportController;
use Illuminate\Support\Facades\Route;


Route::apiResource('/', SiteController::class);
