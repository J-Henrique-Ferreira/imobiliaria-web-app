<div @class(['swiffy-slider', 'slider-nav-round' , 'slider-nav-autoplay'=> $autoplay, 'overflow-hidden'])>

    <ul class="slider-container rounded-3">

        @foreach($imgList as $index => $img)
        <li>
            <img class="rounded object-fit-cover" style="width: 100%; height: 100%;" src="{{ $img['src'] }}" alt="{{ $img['alt'] }}">
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