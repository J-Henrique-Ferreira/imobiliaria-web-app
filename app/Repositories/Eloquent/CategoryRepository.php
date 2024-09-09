<?php

namespace App\Repositories\Eloquent;

use App\Http\Requests\Admin\Category\CategoryStoreUpdateRequest;
use App\Models\Category as Model;
use App\Repositories\Contracts\CategoryRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class CategoryRepository  implements CategoryRepositoryInterface
{
    public function __construct(
        protected Model $model,
    ) {
    }

    public function all(): Collection
    {
        return $this->model::all()->sortBy("name");
    }

    public function add(CategoryStoreUpdateRequest $request): bool
    {
        $business = new $this->model();
        $business->name = $request->name;
        return $business->save();
    }

    public function update(CategoryStoreUpdateRequest $request): bool
    {
        $business = $this->model::find($request->id);
        $business->name = $request->name;
        $business->visible = $request->visible ? true : false;

        return $business->save();
    }

    public function destroy(string | int $id): bool
    {
        if ($business = $this->model->find($id)) {
            return $business->delete();
        }
        return false;
    }
}
