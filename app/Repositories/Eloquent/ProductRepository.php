<?php

namespace App\Repositories\Eloquent;

use App\Http\Requests\Admin\Product\ProductStoreUpdateRequest;
use App\Models\Product as Model;
use App\Repositories\Contracts\ProductRepositoryInterface;
use \Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductRepository implements ProductRepositoryInterface
{
    public function __construct(
        protected Model $model
    ) {
    }

    public function findById(int|string $id): Model
    {
        $product = $this->model::find($id);
        return $product;
    }

    public function findPaged(): LengthAwarePaginator
    {
        $teste = $this->model::with(
            [
                'category',
                'business',
                'author',
                'city',
                'district'
            ]
        )->orderBy('created_at', 'desc')->paginate(8);

        return $teste;
    }

    public function add(ProductStoreUpdateRequest $request): bool
    {
        try {
            $product = new $this->model($request->all());
            $product->author_id = "1";      // autor logado
            $product->default_image = "";
            $product->images_list_url = json_encode([""]);
            $product->whoner_contact = "teste";
            $product->save();

            $folder = $product->id;
            $relativePathImgsList = [];
            $images_list_url = $request->allFiles()["images_list_url"];

            foreach ($images_list_url as $image) {
                $filename = $image->getClientOriginalName();
                $pathImage = $image->storeAs($folder, $filename, "uploads");
                $relativePathImgsList[] = $pathImage;
            }

            $product->default_image = $relativePathImgsList[0];
            $product->images_list_url = json_encode($relativePathImgsList);

            return $product->save();
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function update(Request $request, int|string $id): bool
    {
        try {
            $product = $this->model->findOrFail($id);
            $product->update($request->all());

            if (isset($request["images_list_url"])) {
                $images_list_url = $request->allFiles()["images_list_url"];

                Storage::disk("public")->deleteDirectory("images/uploads/" . $product->id);

                $folder = $product->id;
                $relativePathImgsList = [];


                foreach ($images_list_url as $image) {
                    $filename = $image->getClientOriginalName();
                    $pathImage = $image->storeAs($folder, $filename, "uploads");

                    $relativePathImgsList[] = $pathImage;
                }

                $product->default_image = $relativePathImgsList[0];
                $product->images_list_url = json_encode($relativePathImgsList);
            }
            return $product->save();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function destroy(int|string $id): bool
    {
        $product = $this->model->findOrFail($id);
        Storage::disk("public")->deleteDirectory("images/uploads/" . $product->id);

        return $product->delete();
    }
}
