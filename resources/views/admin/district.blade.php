<x-layouts.admin containerTitle="Bairros">

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
                            <label class="form-label" for="cityId">Nome da Cidade</label>
                            <select id="cityId" class="form-select form-control" name="city_id">
                                <option selected value="null">Selecione</option>
                                @foreach ($citiesList as $city)
                                <option value="{{$city->id}}">{{$city->name}}</option>
                                @endforeach
                            </select>

                            <label class="form-label mt-4" for="nomeciBairro">Nome do Bairro</label>
                            <input class="form-control mb-4" type="text" name="name" id="nomeciBairro">
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
            <div id="FilterCities-collapseOne" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <form action="" class="d-flex flex-column form gap-3 w-100 my-3 ">
                        <div class="card-body d-flex flex-column col-12 gap-4 col-md-4 mx-auto">
                            <label class="form-label " for="">Nome da Cidade</label>
                            <select id="inputState" class="form-select form-control">
                                <option selected value="null">Selecione</option>
                                @foreach ($citiesList as $city)
                                <option value="{{$city->id}}">{{$city->name}}</option>
                                @endforeach
                            </select>
                            <button type="submit" class="btn btn-primary">Selecionar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- display list districts -->
    @if (isset($districtsList))
    <div class="fs-5 fw-medium mx-3">
        Resultados - @php
        echo count($citiesList);
        @endphp
    </div>
    <div class="d-flex flex-column gap-3 accordion " id="accordionPanelsStayOpenExample">
        @foreach ($districtsList as $key => $city)
        <div class="d-flex flex-column gap-3 accordion-item border border-1 border-secondary rounded border-opacity-50 p-3">
            <div class="accordion-header w-100">
                <div class="d-flex justify-content-between" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse{{$key}}" aria-expanded="false" aria-controls="panelsStayOpen-collapse{{$key}}">
                    <div class="fs-5">{{$city["name"]}}</div>
                    <div>
                        @if ($city["visible"])
                        Visível
                        @else
                        Oculto
                        @endif
                    </div>
                </div>
            </div>

            <div id="panelsStayOpen-collapse{{$key}}" class="accordion-collapse collapse">
                <div class="d-flex flex-column flex-md-row gap-5 mt-4 w-100">
                    <form action="{{ route('cities.update', $city['id']) }}" method="POST" class="d-flex flex-column form gap-3 w-100">
                        @csrf
                        @method('PUT')
                        <label for="name" class="form-label">Nome da cidade</label>
                        <input class="form-control" type="text" name="name" id="name" value="{{$city['name']}}" required>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" name="visible" @if ($city['visible'])checked @endif>
                            <label class="form-check-label" for="flexSwitchCheckDefault">Visibilidade</label>
                        </div>
                        <input type="hidden" name="id" name="id" value="{{$city['id']}}" />
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <button type="submit" class="btn btn-primary">Atualizar</button>
                    </form>

                    <form action="{{ route('cities.destroy', $city['id']) }}" method="POST" class="d-flex justify-content-between  form gap-3 w-100" style="align-items: flex-start">
                        @csrf
                        @method('DELETE')
                        <div>
                            <label for="" class="form-label ">Deletar cidade</label>
                        </div>
                        <input class="form-control" type="hidden" name="id" value="{{$city['id']}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <button type="submit" class="btn" style="width: 50px;">
                            <img type="submit" src="{{asset('storage/images/icons/delete.png')}}" style="object-fit: contain; width:35px;" alt="">
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @else
    <div class="fs-5 fw-medium mx-3">
        Cadastre o primeiro bairro!
    </div>
    @endif
</x-layouts.admin>