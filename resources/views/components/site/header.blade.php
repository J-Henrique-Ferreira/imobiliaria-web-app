<div id="topElement"></div>


<header class="shadow-sm fixed-top bg-white" style="z-index: 999;">
    <div class="container  container-fluid">
        <div class="d-flex justify-content-between align-items-center py-2">
            <a href="/" class="col nav-link">
                <img class="img-fluid object-fit-contain" src="{{asset('storage/images/icons/logo.png')}}" alt="Logo da Imobiliária" style="width: 70px;">
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

<div style="height: 3rem;"></div>

<script>
    function navigateHeader() {
        var element = window.document.getElementById("topElement");
        element.scrollIntoView({
            behavior: "smooth"
        });
        console.log(element);
    }
</script>