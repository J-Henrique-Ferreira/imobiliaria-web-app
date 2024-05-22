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

    <div class="fs-5 fw-medium mx-3">
        Resultados - @php
        echo count($citiesList);
        @endphp
    </div>

    <div class="d-flex flex-column gap-3 accordion " id="accordionPanelsStayOpenExample">
        @foreach ($citiesList as $key => $city)
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
</x-layouts.admin>