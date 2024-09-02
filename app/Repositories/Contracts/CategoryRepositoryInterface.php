<?php

namespace App\Repositories\Contracts;

use App\Http\Requests\Admin\Category\CategoryStoreUpdateRequest;
use Illuminate\Database\Eloquent\Collection;


interface CategoryRepositoryInterface
{
    public function all(): Collection;
    public function add(CategoryStoreUpdateRequest $request): bool;
    public function update(CategoryStoreUpdateRequest $request): bool;
    public function destroy(string | int $id): bool;
}
