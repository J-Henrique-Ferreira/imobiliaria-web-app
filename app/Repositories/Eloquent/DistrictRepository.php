<?php

namespace App\Repositories\Eloquent;

use App\Http\Requests\Admin\District\DistrictShowRequest;
use App\Http\Requests\Admin\District\DistrictStoreUpdateRequest;
use App\Models\District as Model;
use App\Repositories\Contracts\DistrictRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class DistrictRepository implements DistrictRepositoryInterface
{
    public function __construct(private Model $model)
    {
    }

    public function findByCity(DistrictShowRequest $request): Collection
    {
        return $this->model->find($request->id)->sortBy('name');
    }

    // public function add(DistrictStoreUpdateRequest $request): bool
    // {
    //     $district = new $this->model();
    //     $district->name = $request->name;
    //     return $district->save();
    // }

    // public function update(DistrictStoreUpdateRequest $request): bool
    // {
    //     $district = new $this->model()->find($request->id);
    //     $district->name = $request->name;
    //     return $district->save();
    // }

    // public function destroy(int|string $id): bool
    // {
    //     return false;
    // }

}
