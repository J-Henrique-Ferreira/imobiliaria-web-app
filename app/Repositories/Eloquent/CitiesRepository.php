<?php

namespace App\Repositories\Eloquent;

use App\Http\Requests\Admin\City\CityStoreUpdateRequest;
use App\Repositories\Contracts\CitiesRepositoryInterface;
use App\Models\City;
use Illuminate\Support\Facades\DB;

class CitiesRepository implements CitiesRepositoryInterface
{
    public function add(CityStoreUpdateRequest $request): City
    {
        return DB::transaction(function () use ($request) {
            $city = new City;
            $city->name = $request->name;
            $city->save();
            return $city;
        });
    }

    public function destroy(City $city): bool
    {
        return $city->delete();
    }
}
