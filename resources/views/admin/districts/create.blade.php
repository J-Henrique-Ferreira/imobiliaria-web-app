<x-layouts.admin containerTitle="Bairros">
    @if (isset($toastMessage))
        @component('components.site.toastMessage', ['toastMessage' => $toastMessage])
        @endComponent
    @endif
    <div class="accordion mb-4" id="accordionAddDistrict">
        <a href="{{ route('districts.create') }}" class="btn btn-primary my-3">Novo bairro</a>
    </div>

    <!-- add district -->
    <div class="accordion mb-4" id="accordionAddDistrict">
        <div class="accordion-item">
            <div class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#AddDistrict-collapseOne" aria-expanded="true"
                    aria-controls="AddDistrict-collapseOne">
                    Adicionar Bairro
                </button>
            </div>
            <div id="AddDistrict-collapseOne" class="accordion-collapse collapse show">
                <div class="accordion-body">
                    <form action="{{ route('districts.store') }}" method="POST"
                        class="d-flex flex-column form gap-3 w-100 my-3 ">
                        @csrf
                        <div class="card-body d-flex flex-column col-12 col-md-4 mx-auto">
                            <x-admin.generic.citiesListSelect :citiesList="$citiesList" :labelText="'Nome da cidade'" :fieldName="'city_id'">
                            </x-admin.generic.citiesListSelect>

                            <label class="form-label mt-4" for="nomeciBairro">Nome do Bairro</label>
                            <input class="form-control mb-4" type="text" name="name" id="nomeciBairro" required>
                            <div class="form-check form-switch mb-3">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="flexSwitchCheckDefault" name="visible" checked="true">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Visibilidade</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin>
