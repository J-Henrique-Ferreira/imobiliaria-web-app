<div class="col-12 col-lg-8" id="productGallery">
    <script>
        function imageClick(imageNumber) {
            //Find the slider element
            const sliderElement = document.getElementById('pgalleryModal');
            //Slide to he right image
            swiffyslider.slideTo(sliderElement, imageNumber);
            //Listen to slide end and set focus to the container to enable keyboard navigation
            swiffyslider.onSlideEnd(sliderElement, function() {
                sliderElement.querySelector(".slider-container").focus()
            });
        }

        function thumbHover(imageNumber) {
            //Find the slider element
            const sliderElement = document.getElementById('pgallery');
            //Slide to he right image
            swiffyslider.slideTo(sliderElement, imageNumber)
        }
    </script>
    <div class="swiffy-slider slider-item-ratio slider-nav-caret slider-nav-autoplay slider-nav-autopause slider-nav-animation slider-nav-animation-slow shadow" id="pgallery">
        <ul class="slider-container rounded">
            @foreach($imgList as $index => $img)
            <li>
                <img class=" object-fit-cover" src="{{ $img['src'] }}" loading="lazy" alt="{{ $img['alt'] }}" data-bs-toggle="modal" data-bs-target="#productGalleryModal" onclick="imageClick({{$index}})">
            </li>
            @endforeach
        </ul>
        <button type="button" class="slider-nav" aria-label="Go previous"></button>
        <button type="button" class="slider-nav slider-nav-next" aria-label="Go next"></button>
    </div>

    <!-- controlador de imagens -->
    <div class="swiffy-slider slider-nav-dark slider-nav-sm slider-nav-chevron slider-item-show6 slider-item-snapstart slider-item-ratio slider-nav-visible slider-nav-outside my-3 d-none  d-lg-block">
        <ul class="slider-container" id="pgallerythumbs" style="cursor:pointer">
            @foreach($imgList as $index => $img)
            <li>
                <img class="rounded object-fit-cover" src="{{ $img['src'] }}" loading="lazy" alt="{{ $img['alt'] }}" onmouseover="thumbHover({{$index}})">
            </li>
            @endforeach
        </ul>

        <button type="button" class="slider-nav" aria-label="Go previous"></button>
        <button type="button" class="slider-nav slider-nav-next" aria-label="Go next"></button>
    </div>

    <!-- modal de carousel de slides extendido-->
    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="productGalleryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="swiffy-slider h-100 slider-nav-dark" id="pgalleryModal">
                        <ul class="slider-container" tabindex="-1">

                            @foreach($imgList as $index => $img)
                            <li class="d-flex align-items-center justify-content-center">
                                <img src="{{ $img['src'] }}" loading="lazy" class="rounded shadow " style="
                                object-fit: contain;
                                width: 100%;
                                height: 85vh;
                                " alt="{{ $img['alt'] }}">
                            </li>
                            @endforeach
                        </ul>

                        <button type="button" class="slider-nav" aria-label="Go previous"></button>
                        <button type="button" class="slider-nav slider-nav-next" aria-label="Go next"></button>
                        <ul class="slider-indicators slider-indicators-dark slider-indicators-highlight slider-indicators-round">
                            @foreach($imgList as $index => $img)
                            <li class=""></li>
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>