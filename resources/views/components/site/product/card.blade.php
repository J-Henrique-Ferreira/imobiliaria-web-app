<a href="/imoveis/{{ $product->id }}/{{ $product->business->name }} de {{ $product->category->name }} - {{ $product->city->name }}"
    class="nav-link shadow-sm border border-1 border-secondary border-opacity-25 overflow-hidden rounded-3 mb-3 card-width zoom_card position-relative bg-white">
    <img src="{{ asset('uploads/' . $product['default_image']) }}" class="w-100"
        style="object-fit: cover; height: 14rem;" alt="Imagem da Casa">
    <p class="position-absolute px-1 mx-2 rounded-1 end-0 top-0 small bg-white opacity-50" style="
    margin-top: 10px; z-index: 50; box-shadow: 0 0 3px #d5dadc;">Cod: {{ $product['id'] }}</p>

    <div class="card-body pt-2 pb-3 px-3"
        style="display: flex; flex-direction: column; justify-content: space-between;">

        <p class="fw-normal fs-5 mb-2 lh-sm" style="min-height: 50px;">
            {{ $product->category->name }} em {{ $product->city->name }} - Bairro {{ $product->district->name }}
        </p>

        <!-- <p class="card-text fs-6 text-gray-700">{{ $product['description'] }}</p> -->

        @component('components.site.product.detailsCard', ['details' => handleProductDetailsList($product)])
        @endcomponent

        <div class="pt-2 d-flex justify-content-between text-xs align-items-center mt-2">
            <p class="card-text text-black fw-semibold text-opacity-75 m-0">R$
                {{ number_format($product['value'], 2, ',', '.') }}
            </p>
            <p class="badge rounded  fw-medium text-black text-uppercase m-0 "
                style="background-color: #e0e0e0; font-size:14px">{{ $product['business']['name'] }}
            </p>
        </div>
    </div>
</a>