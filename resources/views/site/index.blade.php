<x-layouts.site title="início">
    <section class="d-flex justify-content-center my-4">
        @component("components.site.carousel", ["imgList" => $bannersList, "autoplay" => true])
        @endComponent
    </section>
    <x-site.filter></x-site.filter>

    <section class="d-flex flex-wrap justify-content-center gap-2 my-4">
        @foreach($products as $product)
        @component("components.site.product.card", ["product" => $product])
        @endComponent
        @endForeach
    </section>

</x-layouts.site>