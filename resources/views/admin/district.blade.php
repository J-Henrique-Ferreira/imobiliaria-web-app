<x-layouts.admin containerTitle="Bairros">
    @if (isset($toastMessage))
    @component("components.site.toastMessage", ["toastMessage"=> $toastMessage])
    @endComponent
    @endif
    <!-- add district -->
    <div class="accordion mb-4" id="accordionAddDistrict">
        <div class="accordion-item">
            <div class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#AddDistrict-collapseOne" aria-expanded="true" aria-controls="AddDistrict-collapseOne">
                    Adicionar Bairro
                </button>
            </div>
            <div id="AddDistrict-collapseOne" class="accordion-collapse collapse show">
                <div class="accordion-body">
                    <form action="{{ route('districts.store')}}" method="POST" class="d-flex flex-column form gap-3 w-100 my-3 ">
                        @csrf
                        <div class="card-body d-flex flex-column col-12 col-md-4 mx-auto">
                            <x-admin.generic.citiesListSelect :citiesList="$citiesList" :labelText="'Nome da cidade'" :fieldName="'city_id'">
                            </x-admin.generic.citiesListSelect>

                            <label class="form-label mt-4" for="nomeciBairro">Nome do Bairro</label>
                            <input class="form-control mb-4" type="text" name="name" id="nomeciBairro" required>
                            <div class="form-check form-switch mb-3">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" name="visible">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Visibilidade</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- filter district -->
    <div class="accordion" id="accordionFilterCities">
        <div class="accordion-item">
            <div class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#FilterCities-collapseOne" aria-expanded="true" aria-controls="FilterCities-collapseOne">
                    Filtrar por cidade
                </button>
            </div>
            <div id="FilterCities-collapseOne" class="accordion-collapse collapse show">
                <div class="accordion-body">
                    <form action="{{route('districts.show', 1)}}" method="GET" class="d-flex flex-column form gap-3 w-100 my-3">
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
        Todos as os bairros encontrados em <strong>{{$cityName}}</strong> - @php
        echo count($districtsList);
        @endphp
    </div>

    <div class="d-flex flex-column  gap-3 ">
        @foreach ($districtsList as $key => $district)
        <x-admin.sectionObject :name="$district['name']" :objectId="$district['id']" :visible="$district['visible']"></x-admin.sectionObject>

        <x-admin.district.editdFormModal :name="$district['name']" :districtId="$district['id']" :visible="$district['visible']" :citiesList="$citiesList" :atualCityId="$district['city_id']"></x-admin.district.editdFormModal>

        <x-admin.district.deleteFormModal :name="$district['name']" :districtId="$district['id']" :visible="$district['visible']"></x-admin.district.deleteFormModal>
        @endforeach
    </div>
    @else
    <div class="fs-5 fw-medium mx-3">
        Encontre bairros por cidade!
    </div>
    @endif
</x-layouts.admin>