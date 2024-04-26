<x-layouts.site title="Produto">
    <h1 class="fs-4 text-dark text-opacity-75 mt-4 mt-lg-4">
        {{$product["modality"] }} de {{$product["category"]}} - {{$product["address"]["city"]}}
        R${{$product["value"]}},00
    </h1>
    <section class="d-lg-flex justify-content-center gap-4 my-4">
        @component("components.site.productSlide", ["imgList" => $product["images"], "autoplay" => true])
        @endcomponent
        <div class="rounded shadow-sm w-100 p-3 mt-5 mt-lg-0 position-relative">
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
                        {{$product["condominio"]}}
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
    </section>
    <section>
        <div class="mt-5 shadow-sm rounded p-3" style="min-height: 300px;">
            <span class="fs-4 fw-semibold text-dark text-opacity-75">Descrição</span>
            <div class="w-100 my-4 border border-bottom border-opacity-25"></div>
            <p class="text-dark text-opacity-75">{{$product["description"]}}</p>
        </div>
    </section>
    <section class="rounded shadow-sm p-3 mt-5" id="contact_form">
        <span class="fs-4 fw-semibold text-dark text-opacity-75">Me interesso por este imóvel</span>
        <div class="w-100 my-4 border border-bottom border-opacity-25"></div>
        <form class="row g-3 needs-validation bg-transparent ">
            <div class="col-12 col-md-3">
                <label for="validationCustom01" class="form-label text-dark p-0 opacity-75 d-block  gap-2">Seu nome</label>
                <input type="text" class="form-control" id="validationCustom01" name="name" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-12 col-md-3">
                <label for="validationCustom02" class="form-label text-dark p-0 opacity-75 d-block  gap-2">Número de celular</label>
                <input type="tel" pattern="[0-9]{2}[0-9]{5}[0-9]{4}" name="phone_number" class="form-control" id="validationCustom02" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-12 col-md-3">
                <label for="validationCustom03" class="form-label text-dark p-0 opacity-75 d-block  gap-2">Seu email <small>(opcional)</small></label>
                <input type="email" class="form-control" id="validationCustom03" name="email" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>

            <input class="form-check-input" type="hidden" value="{{$product['code']}}" name="product_code" id="invalidCheck" required>

            <div class="col-12 col-md-3 mt-4 mt-md-5">
                <button class="btn w-100 text-white " type="submit" style="background-color: rgb(18 71 148 / 98%);">Enviar contato</button>
            </div>
        </form>
    </section>

</x-layouts.site>