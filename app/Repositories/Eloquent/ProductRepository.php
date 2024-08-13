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

        $images_list_url = $request->images_list_url('file');

        // Definindo um nome único para o arquivo
        $filename = time() . '_' . $images_list_url->getClientOriginalName();

        // Salvando o arquivo em um diretório
        $images_list_url->storeAs('uploads', $filename, 'public');

        $product = new $this->model($request->all());
        $product->author_id = "1";
        $product->default_image = "https://pointer.com.br/blog/wp-content/uploads/2021/02/5a8c590ea936140d7f6def44.jpg";

        $product->images_list_url = json_encode(["https://pointer.com.br/blog/wp-content/uploads/2021/02/5a8c590ea936140d7f6def44.jpg", "https://www.eztec.com.br/wp-content/uploads/blog/2023/09/post_blog_marco_varanda.jpg", "https://d31hw7dq38n1ek.cloudfront.net/Imagens/3/Interno/8937/Imovel/3386707/G_1-101_i6vE8X65Gg27WaYl95409_1016414afd9325dc.jpg", "https://finger.ind.br/wp-content/uploads/2020/01/original-123c34ea8b48242e44e6c91c7ab9952b.jpg"]);
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
