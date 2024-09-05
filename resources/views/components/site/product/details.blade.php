<article class="rounded shadow-sm  w-100 p-3 position-relative bg-white text-uppercase">
    <h3 class="title-generic">Detalhes</h3>
    <div class="w-100 my-4 border border-bottom border-opacity-25 d-md-block"></div>
    <div class="d-flex flex-column h-auto justify-content-between">
        <div class="d-flex flex-wrap gap-2 text-xs align-content-between">
            <div class="d-block  gap-2" style="--bs-bg-opacity: .3; min-width: 110px; ">
                <p class="m-0 fw-semibold ">Quartos</p>
                {{$product->bedroom}}
            </div>
            <div class="d-block  gap-2" style="--bs-bg-opacity: .3; width: 110px; ">
                <p class="m-0 fw-semibold ">Banheiros</p>
                {{$product->bathroom}}
            </div>
            <div class="d-block gap-2" style="--bs-bg-opacity: .3; min-width: 110px; ">
                <p class="m-0 fw-semibold ">Área</p>
                {{$product->area_size}} mt²
            </div>
            <div class="d-block gap-2" style="--bs-bg-opacity: .3; min-width: 110px; ">
                <p class="m-0 fw-semibold ">Vagas</p>
                {{$product->parking_space}}
            </div>

            <div class="d-block gap-2" style="--bs-bg-opacity: .3; min-width: 110px; ">
                <p class="m-0 fw-semibold ">IPTU</p>
                R$ {{number_format($product->iptu, 2, ',', '.')}}
            </div>

            <div class="d-block gap-2 " style=" --bs-bg-opacity: .3; min-width: 110px; ">
                <p class=" m-0 fw-semibold ">Condominio</p>
                R$ {{number_format( $product->condominium, 2, ',', '.')}}
            </div>
            <div class="d-block   gap-2" style="--bs-bg-opacity: .3; min-width: 110px; ">
                <p class="m-0 fw-semibold ">Cód:</p>
                {{$product->id}}
            </div>
            <div class="d-block gap-2" style="--bs-bg-opacity: .3; min-width: 110px; ">
                <p class="m-0 fw-semibold ">Valor</p>
                R$ {{number_format( $product->value, 2, ',', '.')}}
            </div>

        </div>
    </div>
</article>