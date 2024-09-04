<x-layouts.site title="Produto">
    <div class="container">
        <h2 class="fs-4 text-dark mt-4 mt-lg-5 text-uppercase">
            {{$product->business->name }} de {{$product->category->name}} em {{ $product->city->name}}
            R$ {{number_format( $product->value, 2, ',', '.')}}
        </h2>
        <section class="d-lg-flex justify-content-center gap-4 my-4">
            @component("components.site.product.slide", ["images_list_url" => json_decode( $product->images_list_url), "autoplay" => true])
            @endcomponent
        </section>

        @component("components.site.product.details", ["product" => $product])
        @endcomponent

        @component("components.site.product.description", ["description" => $product->description])
        @endcomponent

        @component("components.site.product.contactForm", ["productCode" => $product->code])
        @endcomponent


        <div>
            falar com:
            {{$product->author->name}}

        </div>


    </div>
</x-layouts.site>