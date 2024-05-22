<?php

namespace App\Http\Controllers\Admin;

use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

    public function store(Request $request)
    {
        $request->validate(["name" => ["required", "min:3"]],);

        $city = new City;
        $city->name = $request->name;
        $city->save();

        $request->session()->flash("toastMessage", [
            "status" => "success",
            "message" => "Cidade adicionada com sucesso!"
        ]);

        return redirect("/dashboard/cities");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(City $city, Request $request)
    {
        $request->validate(["name" => ["required", "min:3"]]);

        $city->name = $request->name;
        $city->visible = isset($request->visible);

        $city->save();

        $request->session()->flash("toastMessage", [
            "status" => "success",
            "message" => "Cidade atualizada com sucesso!"
        ]);

        return to_route("cities.index");
    }

    /**
     * Remove the specified resource from storage.
     */
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
