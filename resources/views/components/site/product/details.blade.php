<div class="rounded shadow-sm w-100 p-3 mt-5 mt-lg-0 position-relative bg-white">
    <p class="fs-5 fw-semibold text-dark text-opacity-75">Detalhes</p>
    <div class="w-100 my-4 border border-bottom border-opacity-25 d-md-block "></div>
    <div class="d-flex flex-column h-auto justify-content-between" style="min-height: 300px;">
        <div class="d-flex flex-wrap gap-3 text-xs align-content-between">
            <div class=" text-dark p-0 opacity-75 d-block  gap-2" style="--bs-bg-opacity: .3; min-width: 110px; ">
                <p class="m-0 fw-semibold ">Quartos</p>
                {{$product["bedrooms"]}}
            </div>
            <div class=" text-dark p-0 opacity-75 d-block  gap-2" style="--bs-bg-opacity: .3; width: 110px; ">
                <p class="m-0 fw-semibold ">Banheiros</p>
                {{$product["bathroom"]}}
            </div>
            <div class="text-dark p-0 opacity-75 d-block   gap-2" style="--bs-bg-opacity: .3; min-width: 110px; ">
                <p class="m-0 fw-semibold ">Área</p>
                {{$product["size"]}} mt²
            </div>
            <div class="text-dark p-0 opacity-75 d-block   gap-2" style="--bs-bg-opacity: .3; min-width: 110px; ">
                <p class="m-0 fw-semibold ">Vagas</p>
                {{$product["cars_in_garage"]}}
            </div>

            <div class="text-dark p-0 opacity-75 d-block   gap-2" style="--bs-bg-opacity: .3; min-width: 110px; ">
                <p class="m-0 fw-semibold ">IPTU</p>
                R${{$product["iptu"]}},00
            </div>

            <div class="text-dark p-0 opacity-75 d-block  gap-2 " style="--bs-bg-opacity: .3; min-width: 110px; ">
                <p class="m-0 fw-semibold ">Condominio</p>
                R${{$product["condominio"]}},00
            </div>
            <div class="text-dark p-0 opacity-75 d-block   gap-2" style="--bs-bg-opacity: .3; min-width: 110px; ">
                <p class="m-0 fw-semibold ">Cód:</p>
                {{$product["code"]}}
            </div>
            <div class="text-dark p-0 opacity-75 d-block  gap-2" style="--bs-bg-opacity: .3; min-width: 110px; ">
                <p class="m-0 fw-semibold ">Valor</p>
                R${{$product["value"]}},00
            </div>
            <!-- <div class="d-none d-sm-block"><br><br><br><br><br><br><br></div> -->
        </div>
        <a href="#contact_form" type="button" class="py-2 px-3  text-white rounded-5 nav-link text-center position-absolute bottom-0 start-0 end-0 mx-3 my-3 " style="background-color: rgb(18 71 148 / 98%);">Tenho interesse neste imóvel</a>
    </div>

</div>