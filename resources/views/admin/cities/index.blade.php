<x-layouts.admin containerTitle="Cidades">
    @if (isset($toastMessage))
        @component('components.site.toastMessage', ['toastMessage' => $toastMessage])
        @endComponent
    @endif

    <div class="accordion mb-4" id="accordionAddDistrict">
        <a href="{{ route('cities.create') }}" class="btn btn-primary my-3">Nova cidade</a>
    </div>

    @if (isset($citiesList))
        <div class="fs-5 fw-medium mx-3">
            Todas as cidades - @php
                echo count($citiesList);
            @endphp
        </div>

        <div class="d-flex flex-column  gap-3 ">
            @foreach ($citiesList as $key => $city)
                <x-admin.sectionObject :name="$city['name']" :objectId="$city['id']" :visible="$city['visible']"></x-admin.sectionObject>

                <x-admin.city.editFormModal :name="$city['name']" :cityId="$city['id']" :visible="$city['visible']">
                </x-admin.city.editFormModal>

                <x-admin.city.deleteFormModal :name="$city['name']" :cityId="$city['id']"
                    :visible="$city['visible']"></x-admin.city.deleteFormModal>
            @endforeach
        </div>
    @else
        <div class="fs-5 fw-medium mx-3">
            Cadastre a primeira cidade!
        </div>
    @endif
</x-layouts.admin>
