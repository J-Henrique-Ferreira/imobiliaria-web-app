<x-layouts.admin containerTitle="Imóveis">
    @if (isset($toastMessage))
        @component("components.site.toastMessage", ["toastMessage" => $toastMessage])
        @endComponent
    @endif

    <div class="accordion mb-4 text-end" id="accordionAddDistrict">
        <a href="{{route("imoveis.create")}}" class="btn btn-primary my-3">Novo imóvel</a>
    </div>
    <x-site.filter></x-site.filter>

    <div class="fs-5 fw-medium">
        {!! $products->links("vendor.pagination.statusPaged") !!}
    </div>
    <section class="" style="
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 12px;
    ">
        @foreach($products as $product)
        <div class="mx-auto">
            @component("components.site.product.card", ["product" => $product])
            @endComponent
            <div class="d-flex justify-content-center align-items-center gap-4 mx-3"
                style="margin-top: -18px; margin-bottom: 35px;">
                <a href="{{route('imoveis.edit', $product->id)}}">
                    <div class="text-primary">
                        <x-svgs.square-pen></x-svgs.square-pen>

                    </div>
                </a>

                <button type="button" class="btn p-1" class="btn btn-sm btn-primary m-0" type="button"
                    data-bs-toggle="modal" data-bs-target="#modaldelete{{$product->id}}" data-bs-whatever="@mdo">
                    <div class="text-danger">
                        <x-svgs.trash-2></x-svgs.trash-2>
                    </div>
                </button>
            </div>
        </div>

        <?php
    $name =
        $product->category->name . " - " .
        $product->city->name . " - " .
        " COD: " . $product->id;
                ?>

        <x-admin.product.deleteFormModal :name="$name" :id="$product->id"></x-admin.product.deleteFormModal>
        @endForeach
    </section>
    <div class="d-flex justify-content-center">
        {{ $products->links() }}
    </div>
</x-layouts.admin>