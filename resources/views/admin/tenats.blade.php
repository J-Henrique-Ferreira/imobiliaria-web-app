<x-layouts.admin containerTitle="Inquilinos">
    <div class="d-flex flex-column gap-3" id="accordionPanelsStayOpenExample">
        @for($i = 0; $i < 20; $i++) <div class="d-flex flex-column gap-3 accordion-item border border-1 border-secondary rounded border-opacity-50 p-3">
            <div class="accordion-header w-100">
                <div class="d-flex justify-content-between" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse{{$i}}" aria-expanded="false" aria-controls="panelsStayOpen-collapse{{$i}}">
                    <div class="w-25">João H. Ferreira</div>
                    <div class="w-25">51 9 98777059</div>
                    <div class="w-25">Imóvel_cod: 829234 </div>
                    <div class="w-25">Status: em dia</div>
                </div>
            </div>
            <div id="panelsStayOpen-collapse{{$i}}" class="accordion-collapse collapse">
                <div class="accordion-body">
                    CPF: 099.999.999-99
                </div>
                <br>
                <div>
                    Data início contrato: 09-04-2024
                </div>
                <div>
                    Data término contrato: 09-04-2025
                </div>
                <br>
                <div>
                    Data cadastro inquilino: 10/03/2022
                </div>
            </div>
    </div>
    @endfor
    </div>
</x-layouts.admin>