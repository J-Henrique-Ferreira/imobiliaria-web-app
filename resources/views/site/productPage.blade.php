<x-layouts.site title="Produto">
    <div class="container p-lg-0 d-flex flex-column gap-4">
        @component("components.site.product.slide", ["images_list_url" => json_decode( $product->images_list_url), "autoplay" => true])
        @endcomponent

        <section>
            <h2 class="lg-d-flex align-items-center title-generic">
                {{$product->business->name }} de {{$product->category->name}} em {{ $product->city->name}} - {{ $product->district->name}}
                <div class="d-flex justify-content-between p-2 py-1 rounded-3 text-light w-auto bg-black align-items-center fs-3 mt-1">
                    <span> por R$ {{number_format( $product->value, 2, ',', '.')}}</span>

                    <div class="d-none d-lg-flex align-items-center gap-2" style="max-height: 30px;">
                        <img class="w-2 bg-white rounded px-1" style="height: 28px;" src="{{asset("/storage/images/icons/pyments/pix.png")}}" alt="">
                        <img class="w-2" style="height: 46px;" src="{{asset("/storage/images/icons/pyments/visa.png")}}" alt="">
                        <img class="w-2" style="height: 46px;" src="{{asset("/storage/images/icons/pyments/boleto.png")}}" alt="">
                        <img class="w-2" style="height: 46px;" src="{{asset("/storage/images/icons/pyments/mastercard.ico")}}" alt="">
                        <img class="w-2" style="height: 42px;" src="{{asset("/storage/images/icons/pyments/amex.png")}}" alt="">
                    </div>
                </div>
            </h2>
        </section>

        <div class="col-12 d-flex flex-column flex-lg-row  flex-lg-row-reverse gap-3 m-lg-3">
            <section class="col-lg-4 p-3 rounded bg-white shadow-sm h-100">
                <h2 class="title-generic">Contato</h2>
                <div class="d-flex flex-column justify-content-between gap-3 h-auto">
                    <div>
                        <div>Tratar com
                            <strong> {{$product->author->name}} </strong>
                        </div>
                        <div>Telefone: {{$product->author->phone_number}}</div>
                        <div>CRECI: 533123</div>
                    </div>
                    <a type="button" class="shadow btn py-2 btn-outline-success nav-link text-center text-uppercase text-white bg-black"
                        style="font-size: .8rem;"
                        data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Tenho interesse neste imóvel</a>
                </div>
            </section>
            <div class="col-lg-8 d-flex flex-column gap-3">
                @component("components.site.product.details", ["product" => $product])
                @endcomponent

                @component("components.site.product.description", ["description" => $product->description])
                @endcomponent

                @component("components.site.product.contactForm", ["productCode" => $product->code])
                @endcomponent
            </div>
        </div>
    </div>
</x-layouts.site>