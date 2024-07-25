<?php

namespace App\Repositories\Contracts;

use App\Models\Product;
use App\Http\Requests\Admin\Product\ProductStoreUpdateRequest;

interface ProductRepositoryInterface
{
    // public function paginate();

    public function findById(int | string $id): Product;

    public function add(ProductStoreUpdateRequest $request): bool;

    // public function update(): bool;

    // public function destroy();
}
