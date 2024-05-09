<x-layouts.admin containerTitle="Bairros">

    <form action="" class="d-flex flex-column form gap-3 w-100 mb-5 card">
        <label for="inputState" class="form-label card-header">Selecionar cidade</label>
        <div class="card-body d-flex flex-column gap-4 col-12 col-md-4 mx-auto mt-3 mb-5">
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



    <div class="d-flex flex-column gap-3 accordion " id="accordionPanelsStayOpenExample">
        @for($i = 0; $i < 10; $i++) <div class="d-flex flex-column gap-3 accordion-item border border-1 border-secondary rounded border-opacity-50 p-3">
            <div class="accordion-header w-100">
                <div class="d-flex justify-content-between" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse{{$i}}" aria-expanded="false" aria-controls="panelsStayOpen-collapse{{$i}}">
                    <div class="fs-5">Nome do bairro</div>
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