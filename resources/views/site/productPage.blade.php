<x-layouts.site title="Produto">
    <div class="container p-lg-0 d-flex flex-column gap-4">
        @component("components.site.product.slide", ["images_list_url" => json_decode( $product->images_list_url), "autoplay" => true])
        @endcomponent

        <section>
            <h2 class="lg-d-flex align-items-center title-generic">
                {{$product->business->name }} de {{$product->category->name}} em {{ $product->city->name}} - {{ $product->district->name}}
                <div class="d-lg-flex justify-content-lg-between p-2 py-1 rounded-3 w-auto align-items-center fs-3 mt-1">
                    <div class="d-flex text-white align-items-center rounded"
                        style="background-color: #660ff2; padding-right: 8px; margin-left: 10px">
                        <svg
                            width="24"
                            height="54"
                            viewBox="0 0 24 64"
                            style="
                                margin-left: -18px;
                            ">
                            <path fill="#660ff2" d="M22.557 0h1.442v64h-1.442a8 8 0 01-6.84-3.851l-14.557-24a8 8 0 010-8.298l14.557-24A8 8 0 0122.557 0z"></path>
                        </svg>

                        <div class="d-flex align-items-center gap-3">
                            <div class="fs-3">R$ {{number_format( $product->value, 2, ',', '.')}}</div>
                            <div class="fs-6 fw-lighter">
                                Escolha como pagar
                            </div>
                        </div>
                    </div>
                    <div class="d-lg-flex align-items-center gap-2" style="max-height: 30px;">
                        <img class="w-2 bg-white rounded px-1" style="height: 28px;" src="{{asset("/storage/images/icons/pyments/pix.png")}}" alt="">
                        <img class="w-2" style="height: 46px;" src="{{asset("/storage/images/icons/pyments/visa.png")}}" alt="">
                        <img class="w-2" style="height: 46px;" src="{{asset("/storage/images/icons/pyments/boleto.png")}}" alt="">
                        <img class="w-2" style="height: 46px;" src="{{asset("/storage/images/icons/pyments/mastercard.ico")}}" alt="">
                        <img class="w-2" style="height: 42px;" src="{{asset("/storage/images/icons/pyments/amex.png")}}" alt="">
                    </div>
                </div>
            </h2>
        </section>

        <div class="col-12 d-flex flex-column flex-lg-row gap-3 w-100">
            <section class="col-lg-7 d-flex flex-column gap-3">
                @component("components.site.product.details", ["product" => $product])
                @endcomponent

                @component("components.site.product.description", ["description" => $product->description])
                @endcomponent
            </section>

            <section class="col-lg-4 d-flex flex-column gap-3">
                <div class="rounded bg-white shadow-sm h-auto p-3">
                    <h2 class="title-generic">Contato</h2>
                    <div class="d-flex flex-column justify-content-between gap-3 h-auto">
                        <div>
                            <div>Tratar com
                                <strong> {{$product->author->name}} </strong>
                            </div>
                            <div>Telefone: {{$product->author->phone_number}}</div>
                            <div>CRECI: 533123</div>
                        </div>

                        <div>
                            @component("components.site.product.contactButtons",
                            [
                            "phoneNumber" => $product->author->phone_number,
                            "id" => $product->id
                            ])
                            @endcomponent
                        </div>
                    </div>
                </div>


                @component("components.site.product.contactForm",["productId"=> $product->id])
                @endcomponent
            </section>
        </div>
    </div>

    <a
        style="
        position: fixed;
        bottom: 0;
        right: 0;
        margin:0 20px 26px 0;
        "
        href="https://api.whatsapp.com/send/?phone=+55{{$product->author->phone_number}}&text=Olá, estive visitando o site e gostaria de mais informações sobre o imóvel Cód - {{$product->id}}.&type=phone_number&app_absent=1"
        target="_blank">
        <img
            src="{{asset("/storage/images/icons/whatsapp.png")}}"
            alt=""
            style="width: 60px;">
    </a>
</x-layouts.site>