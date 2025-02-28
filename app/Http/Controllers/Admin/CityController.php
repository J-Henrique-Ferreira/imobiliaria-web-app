<?php

namespace App\Http\Controllers\Admin;

use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\City\CityStoreUpdateRequest;
use App\Repositories\Contracts\CitiesRepositoryInterface;

class CityController extends Controller
{
    public function __construct(private CitiesRepositoryInterface $cityRepository)
    {
    }

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

        return view('admin.cities.index', [
            "citiesList" => $citiesList,
            "toastMessage" => $request->session()->get("toastMessage")
        ]);
    }


    public function create()
    {
        return view("admin.cities.create", []);
    }

    public function store(CityStoreUpdateRequest $request)
    {
        try {
            $this->cityRepository->add($request);

            $request->session()->flash("toastMessage", [
                "status" => "success",
                "message" => "Cidade atualizada com sucesso!"
            ]);
        } catch (\Throwable $th) {
            $request->session()->flash("toastMessage", [
                "status" => "error",
                "message" => "Não foi possivel salvar o registro."
            ]);
        }

        return to_route("cities.index");
    }

    public function update(CityStoreUpdateRequest $request)
    {
        try {
            $this->cityRepository->update($request);
            $request->session()->flash("toastMessage", [
                "status" => "success",
                "message" => "Cidade adicionada com sucesso!"
            ]);
        } catch (\Throwable $th) {
            $request->session()->flash("toastMessage", [
                "status" => "error",
                "message" => "Não foi atualizar o registro."
            ]);
        }

        return to_route("cities.index");
    }

    public function destroy(Request $request)
    {
        try {
            $this->cityRepository->destroy($request->id);
            $request->session()->flash("toastMessage", [
                "status" => "success",
                "message" => "Cidade removida com sucesso!"
            ]);
        } catch (\Throwable $th) {
            $request->session()->flash("toastMessage", [
                "status" => "error",
                "message" => "Não foi possivel remover a cidade!"
            ]);
        }

        return to_route("cities.index");
    }
}
