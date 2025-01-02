<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;


interface DistrictRepositoryInterface
{
    public function findByCity(Request $request): array;
    public function findAllCity(): Collection;
    public function store(Request $request): bool;
    public function update(Request $request): bool;
    public function destroy(Request $request): bool;
}
