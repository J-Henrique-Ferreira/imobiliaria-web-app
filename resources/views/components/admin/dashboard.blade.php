<style>
    .min-card {
        height: 200px;
    }

    .max-card {}
</style>

@php
$dashboardDatasList = [
["title" => "Total de Imóveis", "value" =>"230"],
["title" => "Imóveis disponíveis", "value" =>"98"],
["title" => "Renda mensal", "value" =>"R$544.000,00"],
["title" => "Despesa mensal", "value" => "R$103.000,00"],
];
@endphp

<div class="w-100 d-flex flex-column gap-3 shadow-sm">
    <div class="bg-white shadow-sm-b px-5 py-4 fs-3">
        Dashboard
    </div>
    <div class="d-flex gap-3 text-dark opacity-75 mx-3">
        @foreach($dashboardDatasList as $data)
        <div class="bg-white rounded shadow-sm w-100 p-3 ">
            <span class="mb-2 d-block">{{$data["title"]}}</span>
            <span class="fw-semibold fs-4 ">{{$data["value"]}}</span>
        </div>
        @endForeach
    </div>

    <div class="d-flex gap-1 text-dark opacity-75 mx-3">
        <div class="bg-white rounded shadow-sm w-100 p-3 ">
            <span>Histórico de pagamentos</span>
        </div>

        <div>

        </div>
        @foreach($dashboardDatasList as $data)

        @endForeach
    </div>
</div>