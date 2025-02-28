<?php

namespace App\Providers;

use App\Repositories\Contracts\BusinessRepositoryInterface;
use App\Repositories\Contracts\CategoryRepositoryInterface;
use App\Repositories\Contracts\CitiesRepositoryInterface;
use App\Repositories\Contracts\ProductRepositoryInterface;
use App\Repositories\Contracts\DistrictRepositoryInterface;
use App\Repositories\Eloquent\CategoryRepository;
use App\Repositories\Eloquent\DistrictRepository;
use App\Repositories\Eloquent\BusinessRepository;
use App\Repositories\Eloquent\CitiesRepository;
use App\Repositories\Eloquent\ProductRepository;
use Illuminate\Support\ServiceProvider;



class RepositoryServiceProviders extends ServiceProvider
{
    public array $bindings = [
        CitiesRepositoryInterface::class => CitiesRepository::class,
        BusinessRepositoryInterface::class => BusinessRepository::class,
        CategoryRepositoryInterface::class => CategoryRepository::class,
        ProductRepositoryInterface::class => ProductRepository::class,
        DistrictRepositoryInterface::class => DistrictRepository::class
    ];
}
