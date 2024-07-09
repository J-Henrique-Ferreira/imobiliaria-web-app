<?php

use App\Http\Controllers\Admin\BusinessController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Site\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DistrictController;

Route::get('/', [ProductController::class, "index"]);

Route::get('/product/{code}/{title}', [ProductController::class, "show"]);

Route::get('/dashboard/imoveis', [DashboardController::class, "products"]);

Route::get('/dashboard/adicionar-imovel', function () {
    return view('admin.addProduct', []);
});

Route::get('/dashboard/atualizar-imovel', function () {
    return view('admin.updateProduct', []);
});

Route::get('/dashboard/contatos', function () {
    return view('admin.contacts', []);
});

Route::prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, "index"]);
    Route::resource("/cities", CityController::class, [])->only(["index", "store", "update"]);
    Route::delete('/cities/{id}', [CityController::class, 'destroy'])
        ->name('cities.destroy')
        ->middleware('city.check.related');
    Route::resource("/districts", DistrictController::class, [])->only(
        ["index", "store", "show", "update", "destroy"]
    );
    Route::resource("/business", BusinessController::class, [])->only(["index", "create", "store", "update", "edit"]);
});
