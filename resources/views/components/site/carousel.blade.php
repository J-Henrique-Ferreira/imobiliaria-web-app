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

<div class="position-relative shadow-lg accordion w-100">
    <div @class([
    'swiffy-slider',
    'slider-nav-round',
    'slider-nav-autoplay' => $autoplay,
    'overflow-hidden'
])
        data-slider-nav-autoplay-interval="8000" style="filter: blur(1px);">

        <ul class="slider-container brightness-75">
            @foreach ($imgList as $index => $img)
                <li>
                    <img class="object-fit-cover responsive-carousel" style="height:100vh " src="{{ $img['src'] }}"
                        alt="{{ $img['alt'] }}">
                </li>
            @endforeach
        </ul>

        <!-- <button type="button" class="slider-nav"></button> -->
        <!-- <button type="button" class="slider-nav slider-nav-next"></button> -->

        <div class="slider-indicators">
            @for ($i = count($imgList); $i > 0; $i--)
                @if ($i === count($imgList))
                    <button class="active"></button>
                @else
                    <button></button>
                @endif
            @endfor
        </div>
    </div>
</div>