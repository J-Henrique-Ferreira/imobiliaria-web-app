<?php

namespace App\Repositories\Contracts;

use App\Http\Requests\Admin\Business\BusinessStoreUpdateRequest;
use App\Models\Business as Model;
use Illuminate\Database\Eloquent\Collection;

interface BusinessRepositoryInterface
{
    public function all(): Collection;

    public function add(BusinessStoreUpdateRequest $request): bool;

    public function update(BusinessStoreUpdateRequest $request): bool;

    public function destroy(string $id): bool;
}
