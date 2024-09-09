<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Painel - Imobiliária XYZ</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <!-- <link rel="preconnect" href="https://fonts.bunny.net"> -->
    <!-- <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> -->

    <!-- Scripts -->
    <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
</head>

<style>
    .max-w {
        max-width: 1600px;
    }
</style>

<body class="" style="background-color: #fafafa;">
    <main class="container mx-auto d-flex items-center">
        <x-admin.navbar></x-admin.navbar>
        <div class="w-100 min-vh-100">
            <div class="d-flex justify-content-between px-3 py-3 fs-3 mb-3">
                <div class="d-flex justify-content-between">
                    <a href="/dashboard" class="col nav-link">
                        <img class="img-fluid object-fit-contain" src="{{asset('storage/images/icons/logo.png')}}" alt="Logo da Imobiliária" style="width: 90px;">
                    </a>
                    <div class="mx-5 fs-4 fw-medium my-auto">
                        {{$containerTitle}}
                    </div>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <img class="navbar-toggler-icon object-fit-contain   my-auto" style="width: 30px;" src="https://www.contentformula.com/wp-content/uploads/2016/06/hamburger-menu.png" alt="">
                </button>
            </div>

            <x-site.alertMessage></x-site.alertMessage>

            <div class="d-flex flex-column gap-3 p-3">{{$slot}}</div>
        </div>
    </main>
</body>

</html>