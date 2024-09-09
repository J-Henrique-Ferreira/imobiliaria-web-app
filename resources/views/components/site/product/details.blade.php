<article class="rounded shadow-sm w-100 p-3 position-relative bg-white">
    <h3 class="title-generic">Detalhes</h3>
    <div class="w-100 my-4 border border-bottom border-opacity-25 d-md-block"></div>
    <div class="d-flex flex-column h-auto justify-content-between">
        <div class="d-flex flex-wrap gap-2 text-xs align-content-between">
            @foreach (handleProductDetailsList($product) as $detail)
            <div class="border border-dark shadow-sm border-opacity-10 rounded-2 px-2 py-1 mt-2">
                <span
                    class="fw-light lg-fw-lighter">{{$detail["name"]}}
                </span>

                <span class="d-flex align-items-center gap-2 fw-normal text-black">
                    <img
                        src="{{asset("storage/images/icons/product-details/" .$detail["iconName"] . ".svg")}}"
                        alt=""
                        style="width: 15px; height: 15px;">
                    <span style="font-size: 11px;">{{$detail["value"] ?? "0"}}</span>
                </span>
            </div>
            @endforeach

            <div class="border border-dark shadow-sm border-opacity-10 rounded-2 px-2 py-1 mt-2">
                <span
                    class="fw-light lg-fw-lighter">Cód:
                </span>

                <span class="d-flex align-items-center gap-2 fw-normal text-black">
                    <img
                        src="{{asset("storage/images/icons/product-details/hashtag.svg")}}"
                        alt=""
                        style="width: 15px; height: 15px;">
                    <span style="font-size: 11px;">{{$product->id}}</span>
                </span>
            </div>
        </div>
    </div>
</article>