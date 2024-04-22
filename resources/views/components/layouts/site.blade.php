<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imobiliária XYZ</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<x-site.header></x-site.header>

<body class="">
   <main class="" style="min-height: 100vh;">{{$slot}}</main>
   <x-site.footer></x-site.footer>
</body>

</html>