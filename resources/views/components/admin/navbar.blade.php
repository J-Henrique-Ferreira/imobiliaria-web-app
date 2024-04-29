@php
$navList = [
["name"=>"Dasboard" , "href" => "" ],
["name"=>"Imoveis" , "href" => "" ],
["name"=>"Inquilinos" , "href" => "" ],
["name"=>"Adicionar Imóvel" , "href" => "" ],
["name"=>"Contatos" , "href" => ""]
];
@endphp

<div class="d-flex flex-column gap-3 col-2 vh-100 p-2 text-dark opacity-75 bg-white shadow-sm">
    <img class="img-fluid mx-auto" src="https://martinslealimoveis.com.br/imagens/site_modelo/20230315141349565.png" alt="Logo da Imobiliária" style="width: 110px;">

    <!-- <div class="border border-bottom border-1"></div> -->

    @foreach($navList as $navData)
    <a href="{{$navData['href']}}" class="btn btn-outline-primary border-0 text-start px-4 fw-normal">
        {{$navData["name"]}}
    </a>
    @endForeach


</div>