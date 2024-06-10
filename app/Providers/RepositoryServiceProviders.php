<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\CitiesRepositoryInterface;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\Repositories\Eloquent\CitiesRepository;
use App\Repositories\Eloquent\UserRepository;

class RepositoryServiceProviders extends ServiceProvider
{
    public array $bindings = [
        CitiesRepositoryInterface::class => CitiesRepository::class,
        UserRepositoryInterface::class => UserRepository::class,
    ];
}
