<x-layouts.admin containerTitle="Imóveis">

    @if (isset($toastMessage))
    @component("components.site.toastMessage", ["toastMessage"=> $toastMessage])
    @endComponent
    @endif

    <div class="accordion mb-4 text-end" id="accordionAddDistrict">
        <a href="{{route("imoveis.create")}}" class="btn btn-primary my-3">Novo imóvel</a>
    </div>
    <x-site.filter></x-site.filter>

    <section class="d-flex flex-wrap justify-content-center gap-2 my-4">
        @foreach($products as $product)
        <div class="mx-auto">
            @component("components.site.product.card", ["product" => $product])
            @endComponent
            <div class="d-flex justify-content-end gap-3 mx-3" style="margin-top: -5px; margin-bottom: 35px;">
                <a href="/sddsfag">
                    <img class="img-fluid zoom_icon object-fit-contain" style="max-width: 27px;" src="https://icons.veryicon.com/png/o/miscellaneous/blue-soft-fillet-icon/edit-173.png" alt="editar">
                </a>

                <div onclick="">
                    <img class="img-fluid zoom_card object-fit-contain" style="max-width: 22px;" src="https://cdn-icons-png.freepik.com/512/6861/6861362.png" alt="deletar">
                </div>
            </div>
        </div>
        @endForeach
    </section>
</x-layouts.admin>