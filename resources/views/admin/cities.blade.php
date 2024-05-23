<x-layouts.admin containerTitle="Cidades">
    @component("components.site.toastMessage", ["toastMessage"=> $toastMessage])
    @endComponent

    <div class="accordion mb-4" id="accordionAddDistrict">
        <div class="accordion-item">
            <div class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#AddDistrict-collapseOne" aria-expanded="true" aria-controls="AddDistrict-collapseOne">
                    Adicionar Cidade
                </button>
            </div>
            <div id="AddDistrict-collapseOne" class="accordion-collapse collapse show">
                <div class="accordion-body">
                    @csrf
                    <form action="{{route('cities.store')}}" method="POST" class="d-flex flex-column form w-100 my-3">
                        <div class="card-body d-flex flex-column col-12 col-md-4 mx-auto ">
                            <label class="form-label" for="">Nome da Cidade</label>
                            <input class="form-control mb-4" type="text" name="name">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @if (isset($citiesList))
    <div class="fs-5 fw-medium mx-3">
        Todas as cidades - @php
        echo count($citiesList);
        @endphp
    </div>

    <div class="d-flex flex-column  gap-3 ">
        @foreach ($citiesList as $key => $city)
        <x-admin.sectionObject :name="$city['name']" :cityId="$city['id']" :visible="$city['visible']"></x-admin.sectionObject>

        <x-admin.editCityModal :name="$city['name']" :cityId="$city['id']" :visible="$city['visible']"></x-admin.editCityModal>

        <x-admin.deleteCityModal :name="$city['name']" :cityId="$city['id']" :visible="$city['visible']"></x-admin.deleteCityModal>
        @endforeach
    </div>
    @else
    <div class="fs-5 fw-medium mx-3">
        Cadastre a primeira cidade!
    </div>
    @endif
</x-layouts.admin>