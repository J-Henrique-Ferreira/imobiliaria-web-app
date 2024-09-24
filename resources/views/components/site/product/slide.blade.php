<div class="col-12" id="productGallery">
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

    <div class="d-flex gap-4">
        <div class="swiffy-slider slider-item-ratio slider-nav-caret slider-nav-autoplay slider-nav-autopause slider-nav-animation slider-nav-animation-slow shadow"
            style="height: 5%;" data-slider-nav-autoplay-interval="5000" id="pgallery">
            <ul class="slider-container rounded">
                @foreach ($images_list_url as $index => $img)
                    <li>
                        <div
                            style="background-image: 
                            linear-gradient(to right, rgba(10, 10, 10, 0.9), rgba(10,10,10, 0.9)), 
                            url('{{ asset('uploads/' . $img) }}');
                            background-size: cover;
                            background-repeat: no-repeat;
                            filter: blur(1px); 
                            z-index: -1;
                            ">
                        </div>
                        <img class="object-fit-contain" src="{{ asset('uploads/' . $img) }}" loading="lazy"
                            alt="Imagem de imóvel {{ $index }}" data-bs-toggle="modal"
                            data-bs-target="#productGalleryModal" onclick="imageClick({{ $index }})">
                    </li>
                @endforeach
            </ul>
            <button type="button" class="slider-nav" aria-label="Go previous"></button>
            <button type="button" class="slider-nav slider-nav-next" aria-label="Go next"></button>
        </div>

        <!-- controlador de imagens -->
        <div class="swiffy-slider slider-nav-dark slider-nav-sm slider-nav-chevron slider-item-show6 slider-item-snapstart slider-item-ratio slider-nav-visible slider-nav-outside d-none d-lg-block overflow-hidden"
            style="max-width: 80px; max-height: 490px;">
            <ul class="slider-container h-auto d-flex flex-column gap-5 mx-0" id="pgallerythumbs"
                style="cursor:pointer">
                @foreach ($images_list_url as $index => $img)
                    <li>
                        <img class="rounded object-fit-cover" style="height: 80px;" src="{{ asset('uploads/' . $img) }}"
                            loading="lazy"
                            alt="imagem de imóvel em miniátura clicável referente a imagem {{ $index }}"
                            onmouseover="thumbHover({{ $index }})">
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <!-- modal de carousel de slides extendido-->
    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="true" id="productGalleryModal" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="swiffy-slider h-100 slider-nav-caret" id="pgalleryModal">
                        <ul class="slider-container" tabindex="-1">
                            @foreach ($images_list_url as $index => $img)
                                <li class="d-flex align-items-center justify-content-center"
                                    style="background-image: 
                                        linear-gradient(to right, rgba(10, 10, 10, 0.9), rgba(10,10,10, 0.9)), 
                                        url('{{ asset('uploads/' . $img) }}');
                                        background-size: cover;
                                        background-repeat: no-repeat;
                                        ">
                                    <img src="{{ asset('uploads/' . $img) }}" loading="lazy" class="rounded shadow "
                                        style="
                                        object-fit: contain;
                                        width: 100%;
                                        height: 85vh;"
                                        alt=" imagem de imóvel em rxtendida clicável {{ $index }}">
                                </li>
                            @endforeach
                        </ul>

                        <button type="button" class="slider-nav" aria-label="Go previous"></button>
                        <button type="button" class="slider-nav slider-nav-next" aria-label="Go next"></button>
                        <ul
                            class="slider-indicators slider-indicators-dark slider-indicators-highlight slider-indicators-round">
                            @foreach ($images_list_url as $index => $img)
                                <li class=""></li>
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
