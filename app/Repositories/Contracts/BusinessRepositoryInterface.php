<?php

namespace App\Repositories\Contracts;

use App\Http\Requests\Admin\Business\BusinessStoreUpdateRequest;
use App\Models\Business;

interface BusinessRepositoryInterface
{

    public function add(BusinessStoreUpdateRequest $request): bool;

    public function update(BusinessStoreUpdateRequest $request): bool;

    public function destroy(Business $business): bool;
}
