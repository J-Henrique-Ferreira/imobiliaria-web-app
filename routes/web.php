<?php

use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Site\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', [ProductController::class, "index"]);

Route::get('/product/{code}/{title}', [ProductController::class, "show"]);


Route::get('/dashboard/imoveis', [DashboardController::class, "products"]);

Route::get('/dashboard/adicionar-imovel', function () {
    return view('admin.addProduct', []);
});

Route::get('/dashboard/atualizar-imovel', function () {
    return view('admin.updateProduct', []);
});

Route::get('/dashboard/bairros', function () {
    return view('admin.district', []);
});

Route::get('/dashboard/contatos', function () {
    return view('admin.contacts', []);
});

// Route::resource("/cidades")

Route::prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, "index"]);

    Route::resource("/cidades",  CityController::class, []);
});
