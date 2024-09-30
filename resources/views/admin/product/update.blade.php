<x-layouts.admin containerTitle="Atualizar imóvel - {{$product->id}}">
    <x-admin.product.productForm methodProp="PUT" actionProp="{{route('imoveis.update', $product->id)}}"
        :categoriesList="$categoriesList" :businessList="$businessList" :citiesList="$citiesList"
        :districtsList="$districtsList" :product="$product"></x-admin.product.productForm>
</x-layouts.admin>