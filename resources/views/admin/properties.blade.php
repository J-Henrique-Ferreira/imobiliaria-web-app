<x-layouts.admin containerTitle="Imóveis">
    <x-site.filter></x-site.filter>

    <section class="d-flex flex-wrap justify-content-center gap-2 my-4 ">
        @foreach($products as $product)
        <div class="mx-auto ">
            @component("components.site.product.card", ["product" => $product])
            @endComponent
            <div class="d-flex justify-content-end gap-3 mx-3" style="margin-top: -10px; margin-bottom: 35px;">
                <a href="/3sdsadf">editar </a>
                <a href="/sddsfag">deletar</a>
            </div>
        </div>
        @endForeach
    </section>
</x-layouts.admin>