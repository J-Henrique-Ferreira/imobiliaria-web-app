<?php

use App\Http\Controllers\Site\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', [ProductController::class, "index"]);

Route::get('/product/{code}/{title}', [ProductController::class, "show"]);

Route::get('/dashboard', [DashboardController::class, "index"]);
Route::get('/dashboard/imoveis', [DashboardController::class, "products"]);
Route::get('/dashboard/adicionar-imovel', function () {
    return view('admin.addProduct', []);
});
Route::get('/dashboard/atualizar-imovel', function () {
    return view('admin.updateProduct', []);
});
Route::get('/dashboard/inquilinos', function () {
    return view('admin.tenats', []);
});
Route::get('/dashboard/contatos', function () {
    return view('admin.contacts', []);
});
Route::get('/dashboard/adicionar-imovel', function () {
    return view('admin.addProduct', []);
});
