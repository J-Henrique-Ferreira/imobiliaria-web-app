<x-layouts.site title="Produto">
    <h1 class="fs-4 text-dark text-opacity-75 mt-4 mt-lg-4">
        {{$product["modality"] }} de {{$product["category"]}} - {{$product["address"]["city"]}}
        R${{$product["value"]}},00
    </h1>
    <section class="d-lg-flex justify-content-center gap-4 my-4">
        @component("components.site.productSlide", ["imgList" => $product["images"], "autoplay" => true])
        @endcomponent

        @component("components.site.product.details", ["product" => $product])
        @endcomponent
    </section>


    @component("components.site.product.description", ["description" => $product["description"]])
    @endcomponent

    @component("components.site.product.contactForm", ["productCode" => $product["code"]])
    @endcomponent

</x-layouts.site>