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
    ) {
    }

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
        $product = new $this->model($request->all());
        $product->author_id = "1";
        $product->default_image = "https://resizedimgs.zapimoveis.com.br/crop/614x297/named.images.sp/8dd734a4461befa6d5c80eb736623417/fazenda-s-tio-ch-cara-com-2-quartos-venda-276m-no-fazenda-fialho-taquara.webp";

        $product->images_list_url = json_encode(["https://resizedimgs.zapimoveis.com.br/crop/614x297/named.images.sp/8dd734a4461befa6d5c80eb736623417/fazenda-s-tio-ch-cara-com-2-quartos-venda-276m-no-fazenda-fialho-taquara.webp"]);
        $product->whoner_contact = "teste";

        return $product->save();
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

        return $this->model::where('id', $id)->update($request->except(["_token", "_method"]));
    }

    public function destroy(int | string $id): bool
    {
        $product = $this->model->find($id);

        return $product->delete();
    }
}
