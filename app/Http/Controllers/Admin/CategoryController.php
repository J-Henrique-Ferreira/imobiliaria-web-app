<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Category\CategoryStoreUpdateRequest;
use App\Repositories\Contracts\CategoryRepositoryInterface;

class CategoryController extends Controller
{
    public function __construct(private CategoryRepositoryInterface $categoryRepository)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            // $categoryList = $this->categoryRepository->all();
            $categoryList = Category::paginate(8);
        } catch (\Throwable $th) {
            abort(500);
        }

        return view("admin.category.index", [
            "categoryList" => $categoryList,
            "toastMessage" => $request->session()->get("toastMessage")
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.category.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryStoreUpdateRequest $request)
    {
        try {
            $this->categoryRepository->add($request);
            $request->session()->flash("toastMessage", [
                "status" => "success",
                "message" => "Categoria cadastrada com sucesso!"
            ]);
        } catch (\Throwable $th) {
            $request->session()->flash("toastMessage", [
                "status" => "error",
                "message" => "Não foi possivel cadastrar categoria."
            ]);
        }

        return to_route("category.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string | int $id)
    {
        return to_route("category.index");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        return view("admin.category.update");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryStoreUpdateRequest $request)
    {
        try {
            if ($this->categoryRepository->update($request)) {
                $request->session()->flash("toastMessage", [
                    "status" => "success",
                    "message" => "Categoria atualizada com sucesso!"
                ]);
            } else {
                throw new \Exception("não podemos atualizar o registro");
            }
        } catch (\Throwable $th) {
            $request->session()->flash("toastMessage", [
                "status" => "error",
                "message" => "Não foi possivel atualizar categoria."
            ]);
        }

        return to_route("category.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string | int $id, Request $request)
    {
        try {
            if ($this->categoryRepository->destroy($id)) {
                $request->session()->flash("toastMessage", [
                    "status" => "success",
                    "message" => "Categoria deletada com sucesso!"
                ]);
            } else {
                throw new \Exception("não podemos deletar o registro");
            }
        } catch (\Throwable $th) {
            $request->session()->flash("toastMessage", [
                "status" => "error",
                "message" => "Falha ao deletar categoria."
            ]);
        }

        return to_route("category.index");
    }
}
