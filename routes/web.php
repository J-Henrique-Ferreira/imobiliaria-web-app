<?php

use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Site\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DistrictController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Middleware\Authenticator;

Route::get('/', [ProductController::class, "index"]);

Route::get('/product/{code}/{title}', [ProductController::class, "show"]);


Route::get('/dashboard/imoveis', [DashboardController::class, "products"]);

Route::get('/dashboard/adicionar-imovel', function () {
    return view('admin.addProduct', []);
});

Route::get('/dashboard/atualizar-imovel', function () {
    return view('admin.updateProduct', []);
});

Route::resource("/login", LoginController::class, [])->only("index", "store", "destroy");

// Route::resource("/cidades")

Route::middleware(Authenticator::class)->prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, "index"]);

    Route::resource("/cities", CityController::class, [])->only(["index", "store", "update"]);

    Route::delete('/cities/{id}', [CityController::class, 'destroy'])
        ->name('cities.destroy')
        ->middleware('city.check.related',);

    Route::resource("/districts", DistrictController::class, [])->only(["index", "store", "show", "update", "destroy"]);
});
