@php
$dashboardDatasList = [
["title" => "Total de Imóveis", "value" =>"230"],
["title" => "Imóveis disponíveis", "value" =>"98"],
["title" => "Renda mensal", "value" =>"R$544.348,00"],
["title" => "Despesa mensal", "value" => "R$28.750,00"],
];

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

<div class="w-100 d-flex flex-column gap-3 shadow-sm">
    <div class="bg-white shadow-sm-b px-5 py-4 fs-3">
        Painel de controle
    </div>
    <div class="d-flex gap-3 text-dark opacity-75 mx-3">
        @foreach($dashboardDatasList as $data)
        <div class="bg-white rounded shadow-sm w-100 p-3 ">
            <span class="mb-2 d-block">{{$data["title"]}}</span>
            <span class="fw-semibold fs-4 ">{{$data["value"]}}</span>
        </div>
        @endForeach
    </div>

    <div class="d-flex gap-3 text-dark opacity-75 mx-3">
        <div class="d-flex flex-column gap-3  bg-white rounded shadow-sm w-100 p-3">
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
    </div>
</div>