<?php

namespace App\Repositories\Contracts;

use App\Models\Product;
use App\Http\Requests\Admin\Product\ProductStoreUpdateRequest;
use \Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;

interface ProductRepositoryInterface
{
    public function findPaged(): LengthAwarePaginator;

    public function findById(int | string $id): Product;

    public function add(ProductStoreUpdateRequest $request): bool;

    public function update(Request $request, int | string $id): bool;

    public function destroy(int|string $id): bool;
}
