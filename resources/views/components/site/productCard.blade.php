<div class="max-w-sm rounded overflow-hidden shadow-lg d-flex flex-column ">
    <img class="w-full" src="{{$product['default_image']}}" alt="Imagem da Casa" />
    <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">{{$product["title"]}}</div>
        <p class="text-gray-700 text-base">
            {{$product["description"]}}
        </p>
    </div>
    <div class="px-6 pt-4 pb-2">
        <span
            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2"
            >#{{$product["category"]}}</span
        >
        <span
            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700"
            >#{{$product["modality"]}}</span
        >
    </div>
    <div class="px-6 pt-4 pb-2">
        <p class="text-gray-700 text-base">Valor: R$ {{$product["value"]}}</p>
    </div>
    <div class="px-6 pt-4 pb-2">
        <a
            href="#"
            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 hover:bg-gray-300"
            >Ver detalhes</a
        >
    </div>
</div>
