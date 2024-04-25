<style>
    .card-width {
        width: 300px;
        /* Tamanho máximo padrão */
        margin: 0 auto;
        /* Para centralizar o elemento na tela */
    }

    @media screen and (max-width: 768px) {

        /* Quando a largura da tela for menor ou igual a 768 pixels */
        .card-width {
            width: 50%;
        }
    }

    @media screen and (max-width: 490px) {

        /* Quando a largura da tela for menor ou igual a 480 pixels */
        .card-width {
            width: 100%;
        }
    }

    .zoom_card:hover {
        transform: scale(1.02);
    }
</style>


<div class="shadow overflow-hidden rounded-3 mb-3 card-width zoom_card position-relative " style=" transition: transform 0.25s ease;">
    <img src="{{$product['default_image']}}" class="w-100" style="object-fit: cover; height: 14rem;" alt="Imagem da Casa">
    <p class="position-absolute px-1 mx-2 rounded-5 end-0 top-0 text-secondary small" style="
    margin-top: 10px; background-color: aliceblue; z-index: 50; box-shadow: 0 0 3px #d5dadc;">Cod: 563234</p>

    <div class="card-body pt-2 px-3 pb-4" style="display: flex; flex-direction: column; justify-content: space-between;">

        <p class="fw-normal fs-5 mb-2 lh-sm text-dark text-opacity-75" style=" min-height: 50px;">
            {{$product["category"]}} - {{$product["address"]["city"]}}
        </p>

        <!-- <p class="card-text fs-6 text-gray-700">{{$product["description"]}}</p> -->

        <div class="pt-2 d-flex flex-wrap gap-1 text-xs align-items-center">
            <span class="badge fw-normal text-dark p-0" style="--bs-bg-opacity: .3;">
                {{$product["bedrooms"]}} quartos |
            </span>
            <span class="badge fw-normal text-dark p-0" style="--bs-bg-opacity: .3;">
                {{$product["bathroom"]}} banheiros |
            </span>
            <span class="badge fw-normal text-dark p-0" style="--bs-bg-opacity: .3;">
                {{$product["size"]}} mt² |
            </span>
            <span class="badge fw-normal text-dark p-0" style="--bs-bg-opacity: .3;">
                {{$product["cars_in_garage"]}} vagas
            </span>
        </div>
        <div class="pt-2 d-flex flex-wrap gap-2 text-xs align-items-center">
            <p class="card-text text-dark fw-semibold text-opacity-75 m-0">R$ {{$product["value"]}}</p>
            <p class="badge fw-medium text-dark bg-secondary m-0" style="--bs-bg-opacity: .3;">{{$product["modality"]}}
            </p>
        </div>
    </div>
</div>