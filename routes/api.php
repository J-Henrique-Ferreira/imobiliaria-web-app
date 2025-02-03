<?php

use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\ReplySupportApiController;
use App\Http\Controllers\Api\SiteController;
use App\Http\Controllers\Api\SupportController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DistrictController;

use Illuminate\Http\Request;



// Route::apiResource('/', );

Route::get(
    '/getdistricts',
    [DistrictController::class, 'show']
);


// Route::get('/getdistricts', function (Request $request) {
//     dd($request->id);
// });

