<style>
    .responsive-carousel {
        /* Altura padrão para mobile */
        /* height: 40vh; */
        height: 100%;
        width: 100%;
    }

    /* Media query para telas maiores (desktop) */
    @media (min-width: 768px) {
        .responsive-carousel {
            height: 78vh;
        }
    }
</style>

<div class="shadow-lg brightness-75">
    <div @class(['swiffy-slider', 'slider-nav-round' , 'slider-nav-autoplay'=> $autoplay, 'overflow-hidden' ])
        data-slider-nav-autoplay-interval="8000">

        <ul class="slider-container w-100">
            @foreach($imgList as $index => $img)
            <li>
                <img class="object-fit-cover lg-object-fit-lg-cover responsive-carousel" src="{{ $img['src'] }}" alt="{{ $img['alt'] }}">
            </li>
            @endforeach
        </ul>

        <button type="button" class="slider-nav"></button>
        <button type="button" class="slider-nav slider-nav-next"></button>

        <div class="slider-indicators">
            <button class="active"></button>
            <button></button>
            <button></button>
        </div>
    </div>
</div>