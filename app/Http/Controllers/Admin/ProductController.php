<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\ProductRepositoryInterface;
use App\Repositories\Eloquent\ProductRepository;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Product\ProductStoreUpdateRequest;
use App\Repositories\Eloquent\BusinessRepository;
use App\Repositories\Eloquent\CategoryRepository;
use App\Repositories\Eloquent\CitiesRepository;
use PhpParser\Node\Stmt\TryCatch;

class ProductController extends Controller
{
    public function __construct(private ProductRepositoryInterface $repository) {}

    public function index(Request $request)
    {
        try {
            $products = $this->repository->findPaged();

            return view("admin.product.index", [
                "products" => $products,
                "toastMessage" => $request->session()->get("toastMessage")
            ]);
        } catch (\Throwable $th) {
            abort(500);
        }
    }

    public function create(
        CategoryRepository $category,
        BusinessRepository $business,
        CitiesRepository $city
    ) {
        try {
            $categoriesList = $category->all()->all();
            $citiesList = $city->all()->all();
            $businessList = $business->all()->all();

            return view("admin.product.create", [
                "categoriesList" => $categoriesList,
                "citiesList" => $citiesList,
                "businessList" => $businessList,
                "product" => null
            ]);
        } catch (\Throwable $th) {
            abort(500);
        }
    }


    public function store(ProductStoreUpdateRequest $request)
    {
        try {
            $this->repository->add($request);

            $request->session()->flash("toastMessage", [
                "status" => "success",
                "message" => "Imóvel adicionado com sucesso!"
            ]);
        } catch (\Throwable $th) {
            // dd($th->getMessage());
            abort(500);
        }

        return to_route("imoveis.index");
    }

    public function show(Request $request)
    {
        // dd('caiu no dd');

        if (!isset($request->id)) {
            abort(400);
        }

        try {
            $product = $this->repository->findById($request->id);
            // dd($product->author);
            return view("site.productPage", ["product" => $product]);
        } catch (\Throwable $th) {
            // dd($th->getMessage());
            abort(404);
        }
    }

    public function edit(
        $id,
        CategoryRepository $category,
        BusinessRepository $business,
        CitiesRepository $city,
        ProductRepository $productRepository,

    ) {
        try {
            $product = $productRepository->findById($id);
            $categoriesList = $category->all()->all();
            $citiesList = $city->all()->all();
            $businessList = $business->all()->all();
            $districtsList = $city->districts($product->city->id);

            return view('admin.product.update', [
                "categoriesList" => $categoriesList,
                "citiesList" => $citiesList,
                "businessList" => $businessList,
                "product" => $product,
                "districtsList" => $districtsList
            ]);
        } catch (\Throwable $th) {
            // var_dump($th->getMessage());
            abort(500);
        }
    }

    public function update(ProductStoreUpdateRequest $request, $id)
    {
        try {
            if ($this->repository->update($request, $id)) {
                $request->session()->flash("toastMessage", [
                    "status" => "success",
                    "message" => "Imóvel atualizado com sucesso!"
                ]);
                return redirect("imoveis/" . $id . "/viazualizar-imovel-editado");
            }
        } catch (\Throwable $th) {
            // dd($th->getMessage());
            abort(500);
        }
    }

    public function destroy(Request $request, $id)
    {
        try {
            if ($this->repository->destroy($id)) {
                $request->session()->flash("toastMessage", [
                    "status" => "success",
                    "message" => "Imóvel deletado com sucesso!"
                ]);
            }
        } catch (\Throwable $th) {
            $request->session()->flash("toastMessage", [
                "status" => "error",
                "message" => "Erro ao deletar imóvel."
            ]);
        }

        return to_route("imoveis.index");
    }
}
