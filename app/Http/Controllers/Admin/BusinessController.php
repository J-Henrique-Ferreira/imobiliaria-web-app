<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Business\BusinessStoreUpdateRequest;
use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin.business.index");
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
        // try {
        //     $this->businessRepository->add($request);

        //     $request->session()->flash("toastMessage", [
        //         "status" => "success",
        //         "message" => "Tipo de negócio cadastrado com sucesso!"
        //     ]);
        // } catch (\Throwable $th) {
        //     $request->session()->flash("toastMessage", [
        //         "status" => "error",
        //         "message" => "Não foi possivel cadastrar tipo de negócio!"
        //     ]);
        // }

        return to_route("business.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Business $business)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Business $business)
    {
        return view("admin.busines.update");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Business $business)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Business $business)
    {
        //
    }
}
