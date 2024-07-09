<?php

namespace App\Repositories\Eloquent;

use App\Http\Requests\Admin\Business\BusinessStoreUpdateRequest;
use App\Repositories\Contracts\BusinessRepositoryInterface;
use App\Models\Business as Model;

class BusinessRepository  implements BusinessRepositoryInterface
{
    public function __construct(
        protected Model $model,
    ) {
    }

    public function add(BusinessStoreUpdateRequest $request): bool
    {
        $business = new Model();
        $business->name = $request->name;
        return $business->save();
    }

    public function update(BusinessStoreUpdateRequest $request): bool
    {
        $business = new Model();
        $business->name = $request->name;
        return $business->save();
    }
}
