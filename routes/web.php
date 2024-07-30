<?php

use App\Http\Controllers\Admin\BusinessController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DistrictController;
use App\Http\Controllers\Admin\ProductController;

Route::get('/', [SiteController::class, "index"]);

Route::get("/imoveis/{productId}/{title}", [ProductController::class, "show"]);

Route::prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, "index"]);

    Route::get('/contatos', function () {
        return view('admin.contacts', []);
    });

    Route::resource("/cities", CityController::class, [])->only(["index", "store", "update"]);
    // verificar formas de implementar este middleware mantendo a roda resource
    Route::delete('/cities/{id}', [CityController::class, ''])
        ->name('cities.destroy')
        ->middleware('city.check.related');

    Route::resource("/districts", DistrictController::class, [])->only(
        ["index", "store", "show", "update", "destroy"]
    );

    Route::resource("/business", BusinessController::class, []);

    Route::resource("/category", CategoryController::class, []);

    Route::resource("/imoveis", ProductController::class, []);
});
