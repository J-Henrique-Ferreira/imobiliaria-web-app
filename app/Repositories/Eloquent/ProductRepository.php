<?php

namespace App\Repositories\Eloquent;

use App\Http\Requests\Admin\Product\ProductStoreUpdateRequest;
use App\Models\Product as Model;
use App\Repositories\Contracts\ProductRepositoryInterface;
use \Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductRepository  implements ProductRepositoryInterface
{
    public function __construct(
        protected Model $model
    ) {}

    public function findById(int | string $id): Model
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
            $product->author_id = "1";
            $product->default_image = "";
            $product->images_list_url = json_encode([""]);
            $product->whoner_contact = "teste";
            $product->save();

            $folder = '' . $product->id;
            $relativePathImgsList = [];
            $images_list_url = $request->allFiles()["images_list_url"];

            foreach ($images_list_url as $image) {
                $filename = $image->getClientOriginalName();
                $pathImage = $image->storeAs($folder, $filename, "public");

                $relativePathImgsList[] = $pathImage;
            }

            $product->default_image = $relativePathImgsList[0];
            $product->images_list_url = json_encode($relativePathImgsList);
            $product->save();

            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function update(Request $request, int | string $id): bool
    {
        dd($request);

        // Criar uma nova pasta para as imagens deste imovel product_img_123_nomedaimagemSemEspaços.extençãoDaImagem;

        // armazenar o nome das imagens salvas e inserir na query para o update no banco;

        return $this->model::where('id', $id)->update($request->except(["_token", "_method"]));

        // se falhar o update, remove a pasta recem criada e retorna false
        // (precisa-se ter o nome dela em momoria neste bloco de código);
    }

    public function destroy(int | string $id): bool
    {
        $product = $this->model->find($id);

        return $product->delete();
    }
}
