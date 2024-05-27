<?php

namespace App\Http\Controllers\Admin;

use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\City\CityStoreUpdateRequest;

class CityController extends Controller
{
    public function index(Request $request)
    {
        try {
            $citiesList = [];
            foreach (City::all()->sortByDesc("id") as $city) {
                array_push($citiesList, $city->getAttributes());
            }
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }

        return view('admin.cities', [
            "citiesList" => $citiesList,
            "toastMessage" => $request->session()->get("toastMessage")
        ]);
    }

    public function store(CityStoreUpdateRequest $request)
    {
        $city = new City;
        $city->name = $request->name;
        $city->save();

        $request->session()->flash("toastMessage", [
            "status" => "success",
            "message" => "Cidade adicionada com sucesso!"
        ]);

        return to_route("cities.index");
    }

    public function update(City $city, CityStoreUpdateRequest $request)
    {
        $city->name = $request->name;
        $city->visible = isset($request->visible);
        $city->save();

        $request->session()->flash("toastMessage", [
            "status" => "success",
            "message" => "Cidade atualizada com sucesso!"
        ]);

        return to_route("cities.index");
    }

    public function destroy(City $city, Request $request)
    {
        $city->delete();

        $request->session()->flash("toastMessage", [
            "status" => "success",
            "message" => "Cidade removida com sucesso!"
        ]);

        return to_route("cities.index");
    }
}
