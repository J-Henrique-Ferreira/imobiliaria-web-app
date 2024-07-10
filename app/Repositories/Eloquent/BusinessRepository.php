<?php

namespace App\Repositories\Eloquent;

use App\Http\Requests\Admin\Business\BusinessStoreUpdateRequest;
use App\Repositories\Contracts\BusinessRepositoryInterface;
use App\Models\Business as Model;
use Illuminate\Database\Eloquent\Collection;

class BusinessRepository  implements BusinessRepositoryInterface
{
    public function __construct(
        protected Model $model,
    ) {
    }

    public function all(): Collection
    {
        return $this->model::all();
    }

    public function add(BusinessStoreUpdateRequest $request): bool
    {
        $business = new $this->model();
        $business->name = $request->name;
        return $business->save();
    }

    public function update(BusinessStoreUpdateRequest $request): bool
    {
        $business = $this->model::find($request->id);
        $business->name = $request->name;
        $business->visible = $request->visible ? true : false;

        return $business->save();
    }

    public function destroy(string $id): bool
    {
        if ($business = $this->model->find($id)) {
            return $business->delete();
        }
        return false;
    }
}
