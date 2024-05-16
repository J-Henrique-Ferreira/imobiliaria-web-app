<x-layouts.admin containerTitle="Bairros">

    <div class="accordion mb-4" id="accordionAddDistrict">
        <div class="accordion-item">
            <div class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#AddDistrict-collapseOne" aria-expanded="true" aria-controls="AddDistrict-collapseOne">
                    Adicionar Bairro
                </button>
            </div>
            <div id="AddDistrict-collapseOne" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <form action="" class="d-flex flex-column form gap-3 w-100 my-3 ">
                        <div class="card-body d-flex flex-column col-12 col-md-4 mx-auto">
                            <label class="form-label " for="">Nome da Cidade</label>
                            <select id="inputState" class="form-select form-control">
                                <option selected value="">Selecione</option>
                                <option>Taquara</option>
                                <option>Parobé</option>
                                <option>Igrejinha</option>
                                <option>Três Coroas</option>
                                <option>Gramado</option>
                                <option>Canela</option>
                                <option>Rolante</option>
                                <option>São Leopoldo</option>
                            </select>

                            <label class="form-label mt-4" for="">Nome do Bairro</label>
                            <input class="form-control mb-4" type="text" name="" id="">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="accordion" id="accordionFilterCities">
        <div class="accordion-item">
            <div class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#FilterCities-collapseOne" aria-expanded="true" aria-controls="FilterCities-collapseOne">
                    Filtrar por cidade
                </button>
            </div>
            <div id="FilterCities-collapseOne" class="accordion-collapse collapse show">
                <div class="accordion-body">
                    <form action="" class="d-flex flex-column form gap-3 w-100 my-3 ">
                        <div class="card-body d-flex flex-column col-12 gap-4 col-md-4 mx-auto">
                            <label class="form-label " for="">Nome da Cidade</label>
                            <select id="inputState" class="form-select form-control">
                                <option selected value="">Selecione</option>
                                <option>Taquara</option>
                                <option>Parobé</option>
                                <option>Igrejinha</option>
                                <option>Três Coroas</option>
                                <option>Gramado</option>
                                <option>Canela</option>
                                <option>Rolante</option>
                                <option>São Leopoldo</option>
                            </select>
                            <button type="submit" class="btn btn-primary">Selecionar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex flex-column gap-3 accordion mt-5" id="accordionPanelsStayOpenExample">
        <div class="fs-5 fw-medium mx-3">Bairros encontrados para 'Nome da cidade': 27</div>
        @for($i = 0; $i < 10; $i++) <div class="d-flex flex-column gap-3 accordion-item border border-1 border-secondary rounded border-opacity-50 p-3">
            <div class="accordion-header w-100">
                <div class="d-flex justify-content-between" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse{{$i}}" aria-expanded="false" aria-controls="panelsStayOpen-collapse{{$i}}">
                    <div class="fs-6 fw-medium ">Nome do bairro</div>
                </div>
            </div>
            <div id="panelsStayOpen-collapse{{$i}}" class="accordion-collapse collapse">
                <div class="d-flex flex-column flex-md-row gap-5 mt-4 w-100">
                    <form action="" class="d-flex flex-column form gap-3 w-100">
                        <label for="" class="form-label">Renomear bairro</label>
                        <input class="form-control" type="text">
                        <button type="submit" class="btn btn-primary">Atualizar</button>
                    </form>

                    <form action="" class="d-flex flex-column form gap-3 w-100">
                        <label for="" class="form-label">Deletar bairro</label>

                        <input class="form-control" type="hidden">
                        <button type="submit" class="btn btn-danger">Deletar</button>
                    </form>
                </div>
            </div>
    </div>
    @endfor
    </div>
</x-layouts.admin>