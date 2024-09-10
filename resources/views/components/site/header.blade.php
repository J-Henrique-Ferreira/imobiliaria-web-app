<div id="topElement"></div>


<header class="shadow-sm fixed-top bg-white" style="z-index: 999; opacity:.92 ;">
    <div class="container container-fluid p-lg-0">
        <div class="d-flex justify-content-between align-items-center py-2">
            <a href=" /" class="col nav-link mx-3">
                <img class="img-fluid object-fit-contain" src="{{asset('storage/images/icons/logo.png')}}" alt="Logo da Imobiliária" style="width: 75px;">
            </a>
            <div class="col-md-auto">
                <nav class="d-block">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" class="btn btn-primary" data-bs-toggle="collapse" href="#filter_form" role="button" aria-expanded="false" onclick="navigateHeader()">
                                Filtrar
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Login</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>

<div style="height:65px"></div>

<div class="position-fixed collapse lg-collapsed top-1 mt-1 z-3 w-100" id="filter_form">
    <x-site.filter></x-site.filter>
</div>

<script>
    function navigateHeader() {
        var element = window.document.getElementById("topElement");
        element.scrollIntoView({
            behavior: "smooth"
        });
        console.log(element);
    }
</script>