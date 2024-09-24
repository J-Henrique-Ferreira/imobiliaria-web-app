<x-layouts.admin containerTitle="Bairros">
    @if (isset($toastMessage))
        @component('components.site.toastMessage', ['toastMessage' => $toastMessage])
        @endComponent
    @endif
    <div class="accordion mb-4" id="accordionAddDistrict">
        <a href="{{ route('districts.create') }}" class="btn btn-primary my-3">Novo bairro</a>
    </div>

    <!-- filter district -->
    <div class="accordion" id="accordionFilterCities">
        <div class="accordion-item">
            <div class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#FilterCities-collapseOne" aria-expanded="true"
                    aria-controls="FilterCities-collapseOne">
                    Filtrar por cidade
                </button>
            </div>
            <div id="FilterCities-collapseOne" class="accordion-collapse collapse show">
                <div class="accordion-body">
                    <form action="{{ route('districts.show', 1) }}" method="GET"
                        class="d-flex flex-column form gap-3 w-100 my-3">
                        @csrf
                        <div class="card-body d-flex flex-column col-12 gap-4 col-md-4 mx-auto">
                            <x-admin.generic.citiesListSelect :citiesList="$citiesList" :labelText="'Nome da cidade'" :fieldName="'id'">
                            </x-admin.generic.citiesListSelect>
                            <button type="submit" class="btn btn-primary">Selecionar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- display list districts -->
    @if (isset($districtsList))
        <div class="fs-5  mx-3 mt-4">
            Todos as os bairros encontrados em <strong>{{ $cityName }}</strong> - @php
                echo count($districtsList);
            @endphp
        </div>

        <div class="d-flex flex-column  gap-3 ">
            @foreach ($districtsList as $key => $district)
                <x-admin.sectionObject :name="$district['name']" :objectId="$district['id']" :visible="$district['visible']"></x-admin.sectionObject>

                <x-admin.district.editdFormModal :name="$district['name']" :districtId="$district['id']" :visible="$district['visible']" :citiesList="$citiesList"
                    :atualCityId="$district['city_id']"></x-admin.district.editdFormModal>

                <x-admin.district.deleteFormModal :name="$district['name']" :districtId="$district['id']"
                    :visible="$district['visible']"></x-admin.district.deleteFormModal>
            @endforeach
        </div>
    @else
        <div class="fs-5 fw-medium mx-3">
            Encontre bairros por cidade!
        </div>
    @endif
</x-layouts.admin>
