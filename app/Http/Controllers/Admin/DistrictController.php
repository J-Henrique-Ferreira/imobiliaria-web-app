<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\District\DistrictStoreUpdateRequest;
use App\Http\Requests\Admin\District\DistrictDeleteRequest;
use App\Http\Requests\Admin\District\DistrictShowListRequest;
use App\Models\City;
use App\Models\District;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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

    /**
     * Display the specified resource.
     */
    public function show(DistrictShowListRequest $request)
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

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        dd($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DistrictDeleteRequest $request, string $id)
    {
        dd($request);
    }
}
