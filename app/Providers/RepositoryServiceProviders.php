<?php

namespace App\Providers;

use App\Repositories\Contracts\BusinessRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\CitiesRepositoryInterface;
use App\Repositories\Eloquent\BusinessRepository;
use App\Repositories\Eloquent\CitiesRepository;

class RepositoryServiceProviders extends ServiceProvider
{
    public array $bindings = [
        CitiesRepositoryInterface::class => CitiesRepository::class,
        BusinessRepositoryInterface::class => BusinessRepository::class
    ];
}
