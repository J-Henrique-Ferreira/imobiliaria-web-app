<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Business\BusinessStoreUpdateRequest;
use App\Models\Business;
use App\Repositories\Contracts\BusinessRepositoryInterface;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function __construct(private BusinessRepositoryInterface $businessRepository)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            $businessList = $this->businessRepository->all();
        } catch (\Throwable $th) {
            abort(500);
        }

        return view("admin.business.index", [
            "businessList" => $businessList,
            "toastMessage" => $request->session()->get("toastMessage")
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.business.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BusinessStoreUpdateRequest $request)
    {
        try {
            $this->businessRepository->add($request);
            $request->session()->flash("toastMessage", [
                "status" => "success",
                "message" => "Tipo de negócio cadastrado com sucesso!"
            ]);
        } catch (\Throwable $th) {
            $request->session()->flash("toastMessage", [
                "status" => "error",
                "message" => "Não foi possivel cadastrar tipo de negócio!"
            ]);
        }

        return to_route("business.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string | int $id)
    {
        return to_route("business.index");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        return view("admin.busines.update");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BusinessStoreUpdateRequest $request)
    {
        try {
            if ($this->businessRepository->update($request)) {
                $request->session()->flash("toastMessage", [
                    "status" => "success",
                    "message" => "Tipo de negócio atualizado com sucesso!"
                ]);
            } else {
                throw new \Exception("não podemos atualizar o registro");
            }
        } catch (\Throwable $th) {
            $request->session()->flash("toastMessage", [
                "status" => "error",
                "message" => "Não foi possivel atualizar tipo de negócio"
            ]);
        }

        return to_route("business.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string | int $id, Request $request)
    {
        try {
            if ($this->businessRepository->destroy($id)) {
                $request->session()->flash("toastMessage", [
                    "status" => "success",
                    "message" => "Tipo de negócio deletado com sucesso!"
                ]);
            } else {
                throw new \Exception("não podemos deletar o registro");
            }
        } catch (\Throwable $th) {
            $request->session()->flash("toastMessage", [
                "status" => "error",
                "message" => "Falha ao deletar tipo de negócio."
            ]);
        }

        return to_route("business.index");
    }
}
