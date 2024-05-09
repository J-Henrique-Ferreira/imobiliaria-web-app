<x-layouts.admin containerTitle="Cidades">
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