<div class="modal fade" data-bs-backdrop="static" id="update{{$districtId}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar bairro - {{$name}}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('districts.update', $districtId) }}" method="POST" class="d-flex flex-column form gap-3">
                    @csrf
                    @method('PUT')
                    <x-admin.generic.citiesListSelect :citiesList="$citiesList" :labelText="'Cidade'" :atualCityId="$atualCityId" :fieldName="'city_id'"></x-admin.generic.citiesListSelect>
                    <label for="name" class="form-label">Nome do bairro</label>
                    <input class="form-control" type="text" name="name" id="name" value="{{$name}}" required>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" name="visible" @if ($visible)checked @endif>
                        <label class="form-check-label" for="flexSwitchCheckDefault">Visibilidade</label>
                    </div>
                    <input type="hidden" name="id" name="id" value="{{$districtId}}" />
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <button type="submit" class="btn btn-sm btn-primary">Atualizar</button>
                </form>
            </div>
        </div>
    </div>
</div>