<div class="swiffy-slider slider-nav-round slider-nav-autoplay">
    <ul class="slider-container rounded shadow">

        @foreach($banners as $index => $banner)
        <li>
            <img class="img-fluid rounded object-fit-cover " style="width: 100%; max-height: 400px;" src="{{ $banner['src'] }}" alt="{{ $banner['alt'] }}">
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