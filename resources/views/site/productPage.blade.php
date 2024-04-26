<x-layouts.site title="Produto">

    <section class="d-lg-flex justify-content-center gap-5 my-4">
        @component("components.site.productSlide", ["imgList" => $product["images"], "autoplay" => true])
        @endcomponent
        <div class="rounded shadow w-100 p-3 mt-4 mt-lg-0">a</div>
    </section>

</x-layouts.site>