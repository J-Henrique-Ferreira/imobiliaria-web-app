<?php

namespace App\Repositories\Eloquent;

use App\Http\Requests\Admin\Product\ProductStoreUpdateRequest;
use App\Models\Product as Model;
use App\Repositories\Contracts\ProductRepositoryInterface;
use \Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;

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
        )->paginate(8);

        // dd($teste);

        // exit;

        return $teste;
    }


    public function add(ProductStoreUpdateRequest $request): bool
    {
        try {
            //code...

            $product = new $this->model($request->all());
            $product->author_id = "1";
            $product->default_image = "https://pointer.com.br/blog/wp-content/uploads/2021/02/5a8c590ea936140d7f6def44.jpg";
            $product->images_list_url = json_encode([""]);
            $product->whoner_contact = "teste";

            $product->save();

            dd($product->id);

            $images_list_url = $request->allFiles()["images_list_url"];
            $filename = time() . '_' . $images_list_url->getClientOriginalName();
            $images_list_url->storeAs('uploads', $filename, 'public');

            return true;
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    // public function all()
    // {
    //     return $this->model::all();
    // }

    // public function add()
    // {

    //     return false;
    // }

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
