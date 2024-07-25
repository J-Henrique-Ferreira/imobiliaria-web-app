@php
$navList = [
["name"=>"Painel de controle" , "href" => "/dashboard"],
["name"=>"Imoveis" , "href" => route("imoveis.index")],
["name"=>"Cidades" , "href" => route("cities.index")],
["name"=>"Bairros" , "href" => route("districts.index")],
["name"=>"Negócios" , "href" => route("business.index")],
["name"=>"Categorias" , "href" => route("category.index")],
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
            </div>
        </div>
    </div>
</nav>