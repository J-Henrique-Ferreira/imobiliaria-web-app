<?php

namespace App\Repositories\Contracts;

use App\Http\Requests\Admin\District\DistrictShowRequest;
use App\Http\Requests\Admin\District\DistrictStoreUpdateRequest;
// use App\Models\District;
use Illuminate\Database\Eloquent\Collection;

interface DistrictRepositoryInterface
{
    public function findByCity(DistrictShowRequest $request): Collection;
    // public function add(DistrictStoreUpdateRequest $request): bool;
    // public function update(DistrictStoreUpdateRequest $request): bool;
    // public function destroy(int|string $id): bool;
}
