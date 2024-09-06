<div class="shadow-lg brightness-75">
    <div @class(['swiffy-slider', 'slider-nav-round' , 'slider-nav-autoplay'=> $autoplay, 'overflow-hidden' ])
        data-slider-nav-autoplay-interval="8000">

        <ul class="slider-container w-100">
            @foreach($imgList as $index => $img)
            <li>
                <img class="object-fit-cover" style="width: 100%; height: 70vh;" src="{{ $img['src'] }}" alt="{{ $img['alt'] }}">
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