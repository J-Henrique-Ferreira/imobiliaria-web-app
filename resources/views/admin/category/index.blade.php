<x-layouts.admin containerTitle="Categorias de imóveis">
    @if (isset($toastMessage))
    @component("components.site.toastMessage", ["toastMessage"=> $toastMessage])
    @endComponent
    @endif

    <div class="accordion mb-4" id="accordionAddDistrict">
        <a href="{{ route("category.create")}}" class="btn btn-primary my-3">Nova categoria</a>
    </div>

    @if (isset($businessList))
    <div class="fs-5 fw-medium mx-3">
        Tods os resultatos - @php
        echo count($businessList);
        @endphp
    </div>

    <div class="d-flex flex-column gap-3">
        @foreach ($businessList as $key => $business)
        <x-admin.sectionObject :name="$business['name']" :objectId="$business['id']" :visible="$business['visible']"></x-admin.sectionObject>

        <x-admin.business.editFormModal :name="$business['name']" :businessId="$business['id']" :visible="$business['visible']">
        </x-admin.business.editFormModal>

        <x-admin.business.deleteFormModal :name="$business['name']" :businessId="$business['id']" :visible="$business['visible']"></x-admin.business.deleteFormModal>

        @endforeach
    </div>
    @else
    <div class="fs-5 fw-medium mx-3">
        Cadastre a primeira categoria!
    </div>
    @endif
</x-layouts.admin>