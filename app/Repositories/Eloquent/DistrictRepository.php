<?php

namespace App\Repositories\Eloquent;

use App\Http\Requests\Admin\District\DistrictShowRequest;
use App\Http\Requests\Admin\District\DistrictStoreUpdateRequest;
use App\Models\District as Model;
use App\Repositories\Contracts\DistrictRepositoryInterface;
use App\Models\City;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;



class DistrictRepository implements DistrictRepositoryInterface
{
    public function __construct(private Model $model)
    {
    }

    public function findByCity(Request $request): array
    {
        $city = City::where(['visible' => true, 'name' => $request->name])->with('districts')->first();

        // $districtsList = $city->districts;

        // refatorar, não deveria precisar retoranar a lista de cidades
        return [
            "citiesList" => $city,
            "cityName" => $city->name,
            "districtsList" => $city->districts
        ];
    }

    public function findAllCity(): Collection
    {
        $citiesList = City::where("visible", true)->orderBy("name")->get();

        return $citiesList;
    }

    public function store(Request $request): bool
    {
        $district = new $this->model();
        $district->name = $request->name;
        $district->city_id = $request->city_id;
        $district->visible = isset($request->visible) ? true : false;

        return $district->save();
    }

    public function update(Request $request): bool
    {
        $district = $this->model::find($request->id);
        $district->name = $request->name;
        $district->city_id = $request->city_id;
        $district->visible = isset($request->visible) ? true : false;
        return $district->save();
    }

    public function destroy(Request $request): bool
    {
        return $this->model::destroy($request->id);
    }

}
