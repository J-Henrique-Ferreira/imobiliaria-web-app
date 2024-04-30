<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel - Imobiliária XYZ</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>

<style>
    .max-w {
        max-width: 1600px;
    }
</style>

<body class="" style="background-color: #f7f9fc;">
    <main class="container mx-auto max-w d-flex items-center" style="min-height: 100vh;">
        <x-admin.navbar></x-admin.navbar>
        <div class="w-100  shadow-sm">
            <div class="bg-white shadow-sm-b px-5 py-4 fs-3 mb-3">
                {{$containerTitle}}
            </div>
            <div class="d-flex flex-column gap-3 p-3">{{$slot}}</div>
        </div>
    </main>
</body>

</html>

<!-- https://cdn-icons-png.freepik.com/512/6861/6861362.png%20%20%20%20

https://icons.veryicon.com/png/o/miscellaneous/blue-soft-fillet-icon/edit-173.png -->