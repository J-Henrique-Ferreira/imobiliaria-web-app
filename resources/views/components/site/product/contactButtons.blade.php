<div class="d-flex gap-3">
    <a href="tel:+55{{$phoneNumber}}" class="btn btn-outline-dark fw-bold">
        <span>LIGAR</span>
        <x-svgs.phone></x-svgs.phone>
    </a>

    <a
        href="https://api.whatsapp.com/send/?phone=+55{{$phoneNumber}}&text=Olá, estive visitando o site e gostaria de mais informações sobre o imóvel Cód - {{$id}}.&type=phone_number&app_absent=1"
        target="_blank"
        class="btn d-flex gap-2 text-white fw-bold btn-outline-success"
        style="background-color: #16a34a;">
        <span>WHATSAPP</span>
        <x-svgs.whatsapp></x-svgs.whatsapp>
    </a>
</div>