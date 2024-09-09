<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}} - Imobiliária XYZ</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <!-- swiffy-slider -->

    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


    <!-- fonts roboto -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"> -->


    <!-- fonts monteserrat -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>


<style>
    body {
        font-family: 'monteserrat', sans-serif;
        /* background-color: #fafaf5; */
        /* background-color: #f7f7f7; */
        background-color: #f0f0f0;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: 'monteserrat', sans-serif;
        font-weight: 700;
        /* Ou a espessura que você escolheu */
    }

    p {
        font-family: 'monteserrat', sans-serif;
        font-weight: 400;
    }

    .title-generic {
        /* text-transform: uppercase; */
        color: black;
        font-size: 1.5rem
    }

    .brightness-15 {
        filter: brightness(15%);
    }

    .brightness-25 {
        filter: brightness(25%);
    }

    .brightness-50 {
        filter: brightness(50%);
    }

    .brightness-75 {
        filter: brightness(75%);
    }

    .brightness-100 {
        filter: brightness(100%);
    }
</style>

<x-site.header></x-site.header>

<body>
    <main class="mx-auto flex flex-col items-center" style="min-height: 100vh;">{{$slot}}</main>
    <x-site.footer></x-site.footer>
</body>

</html>