<x-layouts.admin containerTitle="Categorias de imóveis">
    @if (isset($toastMessage))
    @component("components.site.toastMessage", ["toastMessage"=> $toastMessage])
    @endComponent
    @endif

    <div class="accordion mb-4" id="accordionAddDistrict">
        <a href="{{ route("category.create")}}" class="btn btn-primary my-3">Nova categoria</a>
    </div>

    @if (isset($categoryList))
    <div class="fs-5 fw-medium">
        {!! $categoryList->links("vendor.pagination.statusPaged") !!}
    </div>

    <div class="d-flex flex-column gap-3">
        @foreach ($categoryList as $key => $category)
        <x-admin.sectionObject :name="$category['name']" :objectId="$category['id']" :visible="$category['visible']"></x-admin.sectionObject>

        <x-admin.category.editFormModal :name="$category['name']" :id="$category['id']" :visible="$category['visible']">
        </x-admin.category.editFormModal>

        <x-admin.category.deleteFormModal :name="$category['name']" :id="$category['id']" :visible="$category['visible']"></x-admin.category.deleteFormModal>

        @endforeach
    </div>
    @else
    <div class="fs-5 fw-medium mx-3">
        Cadastre a primeira categoria!
    </div>
    @endif

    <div class="d-flex justify-content-center">
        {!! $categoryList->links() !!}
    </div>
</x-layouts.admin>