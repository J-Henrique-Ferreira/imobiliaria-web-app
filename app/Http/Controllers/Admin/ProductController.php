<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product as Model;
use App\Repositories\Contracts\ProductRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Product\ProductStoreUpdateRequest;
use App\Models\Product;
use App\Repositories\Eloquent\BusinessRepository;
use App\Repositories\Eloquent\CategoryRepository;
use App\Repositories\Eloquent\CitiesRepository;

class ProductController extends Controller
{
    public function __construct(private ProductRepositoryInterface $repository)
    {
    }

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

            // dd($categoriesList);

            return view("admin.product.create", [
                "categoriesList" => $categoriesList,
                "citiesList" => $citiesList,
                "businessList" => $businessList
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
            dd($th->getMessage());
            // abort(500);
        }

        return to_route("imoveis.index");
    }

    public function show(Request $request)
    {
        // dd($request->productId);

        if (!isset($request->productId)) {
            abort(400);
        }

        try {
            $product = $this->repository->findById($request->productId);
            // dd($product);

            return view("site.productPage", ["product" => $product]);
        } catch (\Throwable $th) {
            // dd($th->getMessage());
            abort(404);
        }
    }

    public function edit(Request $request)
    {
        return view('admin.product.update', []);
    }

    public function update(Request $request)
    {
    }

    public function destroy(Product $product)
    {
        //
    }
}
