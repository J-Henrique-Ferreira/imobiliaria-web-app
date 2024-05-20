@php

dd($citiesList);

@endphp

<x-layouts.admin containerTitle="Cidades">
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
                    <form action="/dashboard/cidades" method="POST" class="d-flex flex-column form w-100 my-3 ">
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

    <div class="d-flex flex-column gap-3 accordion " id="accordionPanelsStayOpenExample">
        @for($i = 0; $i < 10; $i++) <div class="d-flex flex-column gap-3 accordion-item border border-1 border-secondary rounded border-opacity-50 p-3">
            <div class="accordion-header w-100">
                <div class="d-flex justify-content-between" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse{{$i}}" aria-expanded="false" aria-controls="panelsStayOpen-collapse{{$i}}">
                    <div class="fs-5">Nome da cidade</div>
                </div>
            </div>
            <div id="panelsStayOpen-collapse{{$i}}" class="accordion-collapse collapse">
                <div class="d-flex flex-column flex-md-row gap-5 mt-4 w-100">
                    <form action="" class="d-flex flex-column form gap-3 w-100">
                        <label for="" class="form-label">Renomear cidade</label>
                        <input class="form-control" type="text">
                        <button type="submit" class="btn btn-primary">Atualizar</button>
                    </form>

                    <form action="" class="d-flex flex-column form gap-3 w-100">
                        <label for="" class="form-label">Deletar cidade</label>

                        <input class="form-control" type="hidden">
                        <button type="submit" class="btn btn-danger">Deletar</button>
                    </form>
                </div>
            </div>
    </div>
    @endfor
    </div>
</x-layouts.admin>