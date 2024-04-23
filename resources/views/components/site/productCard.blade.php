<div class="max-w-sm rounded overflow-hidden shadow-md mb-3 ">
    <img class="w-full h-60" style="object-fit: cover;" src="{{$product['default_image']}}" alt="Imagem da Casa" />
    <div class="d-flex flex-column px-3 ">
        <div class="py-4">
            <div class="font-bold text-xl mb-2">{{$product["title"]}}</div>
            <p class="text-gray-700 text-base">
                {{$product["description"]}}
            </p>
        </div>
        <div class="pb-2">
            <p class="text-gray-700 font-bold">R$ {{$product["value"]}}</p>
        </div>
        <div class="flex flex-wrap gap-2 py-3 text-xs">
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 font-medium  text-gray-700">#{{$product["category"]}}</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 font-medium text-gray-700">#{{$product["modality"]}}
            </span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 font-medium text-gray-700">#{{$product["address"]["city"]}}
            </span>
        </div>
    </div>
</div>