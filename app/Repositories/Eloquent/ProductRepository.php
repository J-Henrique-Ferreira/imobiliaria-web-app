<?php

namespace App\Repositories\Eloquent;

use App\Http\Requests\Admin\Product\ProductStoreUpdateRequest;
use App\Models\Product as Model;
use App\Repositories\Contracts\ProductRepositoryInterface;
// use Illuminate\Database\Eloquent\Collection;

class ProductRepository  implements ProductRepositoryInterface
{
    public function __construct(
        protected Model $model
    ) {
    }

    public function findById(int | string $id): Model
    {
        $product = $this->model::findOrFail($id);
        return $product;
    }

    public function add(ProductStoreUpdateRequest $request): bool
    {
        $product = new $this->model($request->all());

        dd($product);

        return $product->save();
    }

    // public function all()
    // {
    //     return $this->model::all();
    // }

    // public function add()
    // {

    //     return false;
    // }

    // public function update()
    // {
    // }

    // public function destroy()
    // {
    // }
}
