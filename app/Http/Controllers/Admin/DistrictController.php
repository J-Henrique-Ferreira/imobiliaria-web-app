<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\Contracts\DistrictRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\District\DistrictDestroyRequest;
use App\Http\Requests\Admin\District\DistrictShowRequest;
use App\Http\Requests\Admin\District\DistrictStoreUpdateRequest;
use App\Models\City;
use App\Models\District;

class DistrictController extends Controller
{
    public function __construct(private DistrictRepositoryInterface $districtRepository)
    {
    }

    public function index(Request $request)
    {
        try {
            $citiesList = $this->districtRepository->findAllCity();
            return view('admin.districts.index', [
                "citiesList" => $citiesList,
                "toastMessage" => $request->session()->get("toastMessage") ?? null
            ]);

        } catch (\Throwable $th) {
            abort(500);
        }
    }

    public function create()
    {
        try {
            $citiesList = $this->districtRepository->findAllCity();
            return view("admin.districts.create", ["citiesList" => $citiesList]);
        } catch (\Throwable $th) {
            abort(500);
        }
    }

    public function show(DistrictShowRequest $request)
    {
        try {
            $datasDistrict = $this->districtRepository->findByCity($request);

            if ($request->json) {
                echo json_encode($datasDistrict["districtsList"]);
                exit;
            }

            return view(
                'admin.districts.index',
                $datasDistrict
            );
        } catch (\Throwable $th) {
            abort(500);
        }
    }

    public function store(DistrictStoreUpdateRequest $request)
    {
        try {
            $statusStore = $this->districtRepository->store($request);
            if ($statusStore) {
                $request->session()->flash("toastMessage", [
                    "status" => "success",
                    "message" => "Bairro adicionado com sucesso!"
                ]);
            } else {
                throw new \Exception("");
            }
        } catch (\Throwable $th) {
            $request->session()->flash("toastMessage", [
                "status" => "false",
                "message" => "Não foi possivel adicionar bairro"
            ]);
        }

        return to_route("districts.index");
    }

    public function update(DistrictStoreUpdateRequest $request)
    {
        $statusUpdate = $this->districtRepository->update($request);
        try {
            if ($statusUpdate) {
                $request->session()->flash("toastMessage", [
                    "status" => "success",
                    "message" => "Bairro " . $request->name . " atualizado com sucesso!"
                ]);
            } else {
                throw new \Exception("");
            }
        } catch (\Throwable $th) {
            $request->session()->flash("toastMessage", [
                "status" => "false",
                "message" => "Não foi possivel alterar bairro"
            ]);
        }
        return to_route("districts.index");
    }

    public function destroy(DistrictDestroyRequest $request)
    {
        $statusDestroy = $this->districtRepository->destroy($request);
        try {
            if ($statusDestroy) {
                $request->session()->flash("toastMessage", [
                    "status" => "success",
                    "message" => "Bairro removido com sucesso!"
                ]);
            } else {
                throw new \Exception("");
            }
        } catch (\Throwable $th) {
            $request->session()->flash("toastMessage", [
                "status" => "false",
                "message" => "Erro ao remover o bairro"
            ]);
        }

        return to_route("districts.index");
    }
}
