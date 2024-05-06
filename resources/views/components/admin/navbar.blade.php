@php
$navList = [
["name"=>"Painel de controle" , "href" => "/dashboard" ],
["name"=>"Imoveis" , "href" => "/dashboard/imoveis" ],
["name"=>"Inquilinos" , "href" => "dashboard/inquilinos" ],
["name"=>"Adicionar Imóvel" , "href" => "dashboard/adicionar-imovel" ],
["name"=>"Contatos" , "href" => "dashboard/contatos"]
];
@endphp

<div class="d-flex flex-column gap-3 col-2 vh-100 p-2 text-dark opacity-75 bg-white shadow-sm fixed-top">
    <img class="img-fluid mx-auto" src="https://martinslealimoveis.com.br/imagens/site_modelo/20230315141349565.png" alt="Logo da Imobiliária" style="width: 110px;">

    <!-- <div class="border border-bottom border-1"></div> -->

    @foreach($navList as $navData)
    <a href="{{$navData['href']}}" class="btn btn-outline-primary border-0 text-start px-4 fw-normal">
        {{$navData["name"]}}
    </a>
    @endForeach
</div>
<div class="col-2"></div>