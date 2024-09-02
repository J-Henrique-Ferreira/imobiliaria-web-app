<style>
    .pulse {
        animation: pulse 2s infinite;
    }


    @keyframes pulse {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.03);
        }

        100% {
            transform: scale(1);
        }
    }
</style>

<div class="rounded border border-1 w-100 p-3 mt-5 mt-lg-0 position-relative bg-white text-uppercase">
    <p class="fs-5 fw-semibold text-dark text-opacity-75">Detalhes</p>
    <div class="w-100 my-4 border border-bottom border-opacity-25 d-md-block "></div>
    <div class="d-flex flex-column h-auto justify-content-between" style="min-height: 300px;">
        <div class="d-flex flex-wrap gap-3 text-xs align-content-between">
            <div class=" text-dark p-0 opacity-75 d-block  gap-2" style="--bs-bg-opacity: .3; min-width: 110px; ">
                <p class="m-0 fw-semibold ">Quartos</p>
                {{$product->bedroom}}
            </div>
            <div class=" text-dark p-0 opacity-75 d-block  gap-2" style="--bs-bg-opacity: .3; width: 110px; ">
                <p class="m-0 fw-semibold ">Banheiros</p>
                {{$product->bathroom}}
            </div>
            <div class="text-dark p-0 opacity-75 d-block   gap-2" style="--bs-bg-opacity: .3; min-width: 110px; ">
                <p class="m-0 fw-semibold ">Área</p>
                {{$product->area_size}} mt²
            </div>
            <div class="text-dark p-0 opacity-75 d-block   gap-2" style="--bs-bg-opacity: .3; min-width: 110px; ">
                <p class="m-0 fw-semibold ">Vagas</p>
                {{$product->parking_space}}
            </div>

            <div class="text-dark p-0 opacity-75 d-block   gap-2" style="--bs-bg-opacity: .3; min-width: 110px; ">
                <p class="m-0 fw-semibold ">IPTU</p>
                R${{$product->iptu}}
            </div>

            <div class="text-dark p-0 opacity-75 d-block  gap-2 " style="--bs-bg-opacity: .3; min-width: 110px; ">
                <p class="m-0 fw-semibold ">Condominio</p>
                R${{$product->condominium}}
            </div>
            <div class="text-dark p-0 opacity-75 d-block   gap-2" style="--bs-bg-opacity: .3; min-width: 110px; ">
                <p class="m-0 fw-semibold ">Cód:</p>
                {{$product->id}}
            </div>
            <div class="text-dark p-0 opacity-75 d-block  gap-2" style="--bs-bg-opacity: .3; min-width: 110px; ">
                <p class="m-0 fw-semibold ">Valor</p>
                R${{$product->value}}
            </div>
            <!-- <div class="d-none d-sm-block"><br><br><br><br><br><br><br></div> -->
        </div>
        <a type="button" class="pulse shadow btn py-2 btn-outline-success text-white nav-link text-center position-absolute bottom-0 start-0 end-0 mx-3 my-3" style="background-color: rgb(18 71 148 / 98%);" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Tenho interesse neste imóvel</a>
    </div>

</div>