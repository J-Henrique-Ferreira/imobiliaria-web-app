<?php

namespace App\Repositories\Eloquent;

use App\Http\Requests\Admin\City\CityStoreUpdateRequest;
use App\Repositories\Contracts\CitiesRepositoryInterface;
use App\Models\City;
use Illuminate\Support\Facades\DB;

class  CitiesRepository implements CitiesRepositoryInterface
{
    public function add(CityStoreUpdateRequest $request): bool
    {
        return DB::transaction(function () use ($request) {
            $city = new City;
            $city->name = $request->name;
            return $city->save();
        });
    }

    public function update(City $city, CityStoreUpdateRequest $request): bool
    {
        $city->name = $request->name;
        $city->visible = isset($request->visible);
        return $city->save();
    }

    public function destroy(City $city): bool
    {
        return $city->delete();
    }
}
