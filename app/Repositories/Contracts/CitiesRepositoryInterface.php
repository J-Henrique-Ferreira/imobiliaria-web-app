<?php

namespace App\Repositories\Contracts;

use App\Http\Requests\Admin\City\CityStoreUpdateRequest;
use App\Models\City;

interface CitiesRepositoryInterface
{
    public function add(CityStoreUpdateRequest $request): City;
    public function update(City $city, CityStoreUpdateRequest $request): bool;
    public function destroy(City $city): bool;
}
