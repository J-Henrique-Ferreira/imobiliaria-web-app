<div class="pt-2 d-flex flex-wrap gap-1 text-xs align-items-center">
    @foreach ($details as $detail )
    <div class="border rounded-2 px-2 py-1">
        <span
            class=""
            style="font-size: 14px;">{{$detail["name"]}}
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

</div>