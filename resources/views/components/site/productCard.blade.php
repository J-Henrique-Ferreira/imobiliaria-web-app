<div class="shadow overflow-hidden rounded mb-3" style="max-width: 19rem;">
    <img src="{{$product['default_image']}}" class="card-img-top" style="object-fit: cover; height: 14rem;" alt="Imagem da Casa">
    <div class="card-body p-2">
        <p class="fw-medium   fs-5 mb-2 lh-sm">{{$product["title"]}}</p>
        <p class="card-text text-gray-700">{{$product["description"]}}</p>
        <div class="pt-2">
            <p class="card-text text-gray-700 fw-semibold">R$ {{$product["value"]}}</p>
        </div>
        <div class="pt-3">
            <div class="d-flex flex-wrap gap-2 text-xs">
                <span class="badge fw-medium text-dark bg-secondary" style="--bs-bg-opacity: .3;">#{{$product["category"]}}</span>
                <span class="badge fw-medium text-dark bg-secondary" style="--bs-bg-opacity: .3;">#{{$product["modality"]}}</span>
                <span class="badge fw-medium text-dark bg-secondary" style="--bs-bg-opacity: .3;">#{{$product["address"]["city"]}}</span>
            </div>
        </div>
    </div>
</div>