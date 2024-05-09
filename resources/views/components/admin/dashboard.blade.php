@php
$pymentHistory = [
["date" => "February-2024", "value" => "R$99.900,000", "status" => "pago"],
["date" => "January-2024", "value" => "R$80.000,000", "status" => "pago"],
["date" => "December-2024", "value" => "R$97.260,000", "status" => "pago"],
["date" => "November-2024", "value" => "R$75.800,000", "status" => "pago"],
["date" => "October-2024", "value" => "R$69.400,000", "status" => "pago"],
["date" => "September-2024", "value" => "R$80.500,000", "status" => "pago"],
];

$maintenanceHistory = [
["date" => "February-2024", "value" => "R$900,000", "status" => "completo"],
["date" => "January-2024", "value" => "R$2000,000", "status" => "completo"],
["date" => "December-2024", "value" => "R$1340,000", "status" => "completo"],
["date" => "November-2024", "value" => "R$6800,000", "status" => "completo"],
["date" => "October-2024", "value" => "R$600,000", "status" => "completo"],
["date" => "September-2024", "value" => "R$700,000", "status" => "completo"],
];
@endphp


<div class="d-flex flex-column flex-md-row  gap-3 text-dark opacity-75">
    <div class="bg-white rounded shadow-sm w-100 p-3 ">
        <span class="mb-2 d-block">Total de imóveis</span>
        <span class="fw-semibold fs-4">210</span>
    </div>

    <div class="bg-white rounded shadow-sm w-100 p-3 ">
        <span class="mb-2 d-block">Imóveis disponíveis</span>
        <span class="fw-semibold fs-4">210</span>
    </div>

    <div class="bg-white rounded shadow-sm w-100 p-3 ">
        <span class="mb-2 d-block">Contatos pendentes</span>
        <span class="fw-semibold fs-4">210</span>
    </div>

    <div class="bg-white rounded shadow-sm w-100 p-3 ">
        <span class="mb-2 d-block">Todos os contatos</span>

        <span class="fw-semibold fs-4">210</span>
    </div>
</div>


<div class="my-5">
    <form action="#" id="filter_contacts" class="container shadow-sm rounded-3 p-3 pb-4 bg-white">
        <span class="fw-medium fs-4">Filtro de contatos</span>
        <div class="d-flex flex-column flex-lg-row justify-content-center  gap-3 mt-3">
            <div class="form-group w-100 mb-3 mb-lg-0 ">
                <label for="preco" class="text-secondary mb-1">Nome</label>
                <input type="text" class="form-control ">
            </div>
            <div class="form-group w-100 mb-3 mb-lg-0 ">
                <div class="form-group">
                    <label for="tipoImovel" class="text-secondary mb-1">Phone</label>
                    <input type="text" class="form-control ">
                </div>
            </div>
            <div class="form-group w-100 mb-3 mb-lg-0 ">
                <div class="form-group">
                    <label for="tipoImovel" class="text-secondary mb-1">Imóvel cod</label>
                    <input type="text" class="form-control ">
                </div>
            </div>
            <div class="form-group w-100 mb-3 mb-lg-0 ">
                <div class="form-group">
                    <label for="tipoImovel" class="text-secondary mb-1">Data registro</label>
                    <input type="date" class="form-control">
                </div>
            </div>
            <button class="btn btn-primary mt-4  mx-lg-0 " style="width: 200px;">Buscar</button>
        </div>
    </form>
</div>

<span class="fw-medium fs-4">Resultados - 45</span>


<div class="d-flex flex-column gap-3 text-dark opacity-75" id="accordionPanelsStayOpenExample">
    @for($i = 0; $i < 20; $i++) <div class="d-flex flex-column gap-3 border border-1 border-secondary rounded border-opacity-50 p-3">
        <div class=" w-100">
            <div class="d-md-flex justify-content-between">
                <div class="col-md-3 col-12">João H. Ferreira</div>
                <div class="col-md-2 col-12">51 9 98777059</div>

                <a href="#" class="d-flex gap-3 align-items-center col-md-3 col-12">
                    <div class="">Imóvel_cod: 829234</div>
                    <img src="https://static-00.iconduck.com/assets.00/external-link-icon-2048x2048-wo7lfgrz.png" alt="" style="width: 16px; object-fit: contain;">
                </a>

                <div class="col-md-2 col-12">10/03/2022</div>

                <div class="col-md-2 col-12">Pendente</div>
            </div>
        </div>
        <div id="" class="">
            <div class="d-flex justify-content-end  gap-3">
                <form class="form mt-2 ">
                    <input type="hidden" name="" id="">
                    <button class="btn btn-primary">Visto</button>
                </form>
                <form class="form mt-2 ">
                    <input type="hidden" name="" id="">
                    <button class="btn btn-danger ">Deletar</button>
                </form>
            </div>
        </div>
</div>
@endfor
</div>


<!-- <div class="d-flex flex-column gap-3  bg-white rounded shadow-sm w-100 p-3">
    <div class="fw-normal fs-5">Histórico de Pagamentos</div>

    <div class="d-flex justify-content-between fw-semibold">
        <div class="col-4">Data de pagamento</div>
        <div class="col-3">Valor</div>
        <div class="col-3">Status</div>
    </div>

    <div>
        @foreach($pymentHistory as $pyment)
        <a href="/historico-pagamentos/{{$pyment["date"]}}" class="nav-link">
            <div class="d-flex justify-content-between align-items-center " style="height: 34px;">
                <div class="col-4">{{$pyment["date"]}}</div>
                <div class="col-3">{{$pyment["value"]}}</div>
                <div class="col-3">{{$pyment["status"]}}</div>
            </div>
        </a>

        <div class="border  border-bottom-1 "></div>
        @endForeach

    </div>
    <a href="" class="btn btn-primary">Todos os Pagamentos</a>
    </div>

    <div class="d-flex flex-column gap-3  bg-white rounded shadow-sm w-100 p-3">
        <div class="fw-normal fs-5">Histórico de Manutenções</div>

        <div class="d-flex justify-content-between fw-semibold">
            <div class="col-4">Data de pagamento</div>
            <div class="col-3">Valor</div>
            <div class="col-3">Status</div>
        </div>

        <div>
            @foreach($maintenanceHistory as $pyment)
            <a href="historico-manutencoes/{{$pyment["date"]}}" class="nav-link">
                <div class="d-flex justify-content-between align-items-center " style="height: 34px;">
                    <div class="col-4">{{$pyment["date"]}}</div>
                    <div class="col-3">{{$pyment["value"]}}</div>
                    <div class="col-3">{{$pyment["status"]}}</div>
                </div>
            </a>
            <div class="border  border-bottom-1 "></div>
            @endForeach
        </div>
        <a href="" class="btn btn-primary">Todas As Manutenções</a>
    </div>
    -->