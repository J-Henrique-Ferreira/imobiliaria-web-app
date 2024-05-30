<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\District\DistrictDestroyRequest;
use App\Http\Requests\Admin\District\DistrictShowRequest;
use App\Http\Requests\Admin\District\DistrictStoreUpdateRequest;
use App\Models\City;
use App\Models\District;

class DistrictController extends Controller
{
    public function index(Request $request)
    {
        $citiesList = City::where("visible", true)->orderBy("name")->get();

        return view('admin.district', [
            "citiesList" => $citiesList,
            "toastMessage" => $request->session()->get("toastMessage") ?? null
        ]);
    }

    public function store(DistrictStoreUpdateRequest $request)
    {
        $district = new District;
        $district->name = $request->name;
        $district->city_id = $request->city_id;
        $district->visible = isset($request->visible) ? true : false;

        $district->save();

        $request->session()->flash("toastMessage", [
            "status" => "success",
            "message" => "Bairro adicionado com sucesso!"
        ]);

        return to_route("districts.index");
    }

    public function show(DistrictShowRequest $request)
    {
        $citiesList = City::where("visible", true)->orderBy("name")->get();
        $city = new City;
        $city = $city->find($request->id);

        $districtsList = $city->districts;

        return view(
            'admin.district',
            [
                "citiesList" => $citiesList,
                "cityName" => $city->name,
                "districtsList" => $districtsList
            ]
        );
    }

    public function update(DistrictStoreUpdateRequest $request, string $id)
    {
        $district = District::find($id);
        $district->name = $request->name;
        $district->city_id = $request->city_id;
        $district->visible = isset($request->visible) ? true : false;
        $district->save();

        $request->session()->flash("toastMessage", [
            "status" => "success",
            "message" => "Bairro " . $district->value("name") . " atualizado com sucesso!"
        ]);
        return to_route("districts.index");
    }

    public function destroy(DistrictDestroyRequest $request,  District $district)
    {
        $district->delete();

        $request->session()->flash("toastMessage", [
            "status" => "success",
            "message" => "Bairro removido com sucesso!"
        ]);

        return to_route("districts.index");
    }
}
