<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BusinessController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DistrictController;
use App\Http\Controllers\Admin\ProductController;

use App\Http\Controllers\ProfileController;

Route::get('/', [SiteController::class, "index"]);

Route::get('/dashboard1', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard1');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get("/imoveis/{id}/{title}", [ProductController::class, "show"]);
Route::get("/site/imoveis/{productId}/{title}", [ProductController::class, "show"]);

// Route::middleware(['auth', 'verified'])->group(function () {
Route::prefix('/dashboard')->group(function () {
    Route::get('/', [DashboardController::class, "index"])->name("dashboard");
    Route::get('/contatos', function () {
        return view('admin.contacts', []);
    });

    // verificar formas de implementar este middleware mantendo a rota resource
    Route::delete(
        '/cities/{id}',
        [CityController::class, 'destroy']
    )
        ->name('cities.destroy')
        ->middleware('city.check.related');

    Route::resource(
        "/cities",
        CityController::class,
        []
    )->except("show", 'edit');

    Route::resource(
        "/districts",
        DistrictController::class,
        []
    )->except("edit");

    Route::resource(
        "/business",
        BusinessController::class,
        []
    );

    Route::resource(
        "/category",
        CategoryController::class,
        []
    );

    Route::resource(
        "/imoveis",
        ProductController::class,
        []
    );
});
// });





require __DIR__ . '/auth.php';
