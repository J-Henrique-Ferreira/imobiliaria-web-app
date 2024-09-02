<x-layouts.site title="início">
    <section class="d-flex justify-content-center my-4">
        @component("components.site.carousel", ["imgList" => $bannersList, "autoplay" => true])
        @endComponent
    </section>
    <x-site.filter></x-site.filter>

    <div class="fs-5 fw-medium mt-5">
        {!! $products->links("vendor.pagination.statusPaged") !!}
    </div>

    <section class="" style="
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 12px;
    ">
        @foreach($products as $product)
        @component("components.site.product.card", ["product" => $product])
        @endComponent
        @endForeach
    </section>

    <div class="d-flex justify-content-center">
        {{ $products->links() }}
    </div>
</x-layouts.site>