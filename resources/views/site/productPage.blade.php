<x-layouts.site title="Produto">
    <h1 class="fs-4 text-dark text-opacity-75 mt-4 mt-lg-5 text-uppercase">
        {{$product->business->name }} de {{$product->category->name}} - {{$product->city->name}}
        R${{$product->value}},00
    </h1>
    <section class="d-lg-flex justify-content-center gap-4 my-4">
        @component("components.site.product.slide", ["images_list_url" => json_decode( $product->images_list_url), "autoplay" => true])
        @endcomponent

        @component("components.site.product.details", ["product" => $product])
        @endcomponent
    </section>

    @component("components.site.product.description", ["description" => $product->description])
    @endcomponent

    @component("components.site.product.contactForm", ["productCode" => $product->code])
    @endcomponent
</x-layouts.site>