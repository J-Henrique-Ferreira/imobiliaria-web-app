<?php

namespace App\Repositories\Contracts;

use App\Http\Requests\Admin\City\CityStoreUpdateRequest;
// use App\Models\City;
use Illuminate\Database\Eloquent\Collection;

interface CitiesRepositoryInterface
{
    public function all(): Collection;
    public function add(CityStoreUpdateRequest $request): bool;
    public function update(CityStoreUpdateRequest $request): bool;
    public function destroy(int|string $id): bool;

    public function districts(int|string $id);
}
