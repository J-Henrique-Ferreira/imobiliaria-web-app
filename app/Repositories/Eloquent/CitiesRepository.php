<?php

namespace App\Repositories\Eloquent;

use App\Http\Requests\Admin\City\CityStoreUpdateRequest;
use App\Repositories\Contracts\CitiesRepositoryInterface;
use App\Models\City;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use stdClass;

class CitiesRepository implements CitiesRepositoryInterface
{

    public function __construct(private City $city)
    {
    }

    public function all(): Collection
    {
        return City::all()->sortBy("name");
    }

    public function add(CityStoreUpdateRequest $request): bool
    {
        return DB::transaction(function () use ($request) {
            $this->city->name = $request->name;
            $this->city->visible = true;
            return $this->city->save();
        });
    }

    public function update(CityStoreUpdateRequest $request): bool
    {
        $city = $this->city->find($request->id);
        $city->name = $request->name;
        $city->visible = isset($request->visible);
        return $city->save();
    }

    public function destroy(int|string $id): bool
    {
        $city = $this->city->find($id);
        return $city->delete();
    }

    public function districts(int|string $id)
    {
        $city = $this->city->find($id);
        return $city->districts->all();
    }
}
