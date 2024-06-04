@php
$navList = [
["name"=>"Painel de controle" , "href" => "/dashboard" ],
["name"=>"Imoveis" , "href" => "/dashboard/imoveis" ],
["name"=>"Adicionar Imóvel" , "href" => "/dashboard/adicionar-imovel" ],
["name"=>"Cidades" , "href" => "/dashboard/cities" ],
["name"=>"Bairros" , "href" => "/dashboard/districts" ]
];
@endphp

<nav class="navbar position-fixed fixed-top p-0" visually-hidden>
    <div class="container-fluid">
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header d-flex align-items-lg-start ">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="offcanvas-body navbar-nav gap-3  justify-content-start">
                @foreach($navList as $navData)
                <a href="{{$navData['href']}}" class="btn btn-outline-primary border-0 text-start px-2 fw-normal">
                    {{$navData["name"]}}
                </a>
                @endForeach

                <form action="{{route("login.destroy", 0)}}" method="POST" class="w-100">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-primary border-0 text-start px-2 fw-normal w-100">
                        Sair
                    </button>
                </form>

            </div>

        </div>
    </div>
</nav>