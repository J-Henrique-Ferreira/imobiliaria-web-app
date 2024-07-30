<style>
    .zoom_card {
        transition: transform .4s ease;
    }

    @media screen and (max-width: 800px) {

        /* Quando a largura da tela for menor ou igual a 480 pixels */
        .card-width {
            width: 100%;
        }
    }

    .zoom_card:hover {
        transform: scale(1.03);
    }
</style>

<a href="/imoveis/{{$product->id}}/{{$product->business->name}} de {{$product->category->name}} - {{$product->city->name}}" class="nav-link shadow border border-1 border-secondary border-opacity-25 overflow-hidden rounded-3 mb-3 card-width zoom_card position-relative bg-white">
    <img src="{{$product['default_image']}}" class="w-100" style="object-fit: cover; height: 14rem;" alt="Imagem da Casa">
    <p class="position-absolute px-1 mx-2 rounded-1 end-0 top-0 small" style="
    margin-top: 10px; background-color: aliceblue; z-index: 50; box-shadow: 0 0 3px #d5dadc;">Cod: {{$product["id"]}}</p>

    <div class="card-body pt-2 px-3 pb-4" style="display: flex; flex-direction: column; justify-content: space-between;">

        <p class="fw-normal fs-5 mb-2 lh-sm text-uppercase" style="min-height: 50px;">
            {{$product->category->name}} - {{$product->city->name}}
        </p>

        <!-- <p class="card-text fs-6 text-gray-700">{{$product["description"]}}</p> -->

        <div class="pt-2 d-flex flex-wrap gap-1 text-xs align-items-center text-uppercase">
            <span class="badge fw-normal text-black p-0" style="">
                {{$product['bedroom']}} quartos |
            </span>
            <span class="badge fw-normal text-black p-0" style="">
                {{$product["bathroom"]}} banheiros |
            </span>
            <span class="badge fw-normal text-black p-0" style="">
                {{$product["area_size"]}} mt² |
            </span>
            <span class="badge fw-normal text-black p-0" style="--bs-bg-opacity: .3;">
                {{$product["parking_space"]}} vagas
            </span>
        </div>
        <div class="pt-2 d-flex justify-content-between text-xs align-items-center mt-1">
            <p class="card-text text-black fw-semibold text-opacity-75 m-0">R${{$product["value"]}}</p>
            <p class="badge rounded  fw-medium text-black text-uppercase m-0 " style="background-color: #e0e0e0; font-size:14px">{{$product["business"]["name"]}}
            </p>
        </div>
    </div>
</a>