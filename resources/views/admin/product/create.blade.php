<x-layouts.admin containerTitle="Adicionar imóvel">
    <x-admin.product.productForm methodProp="post" actionProp="{{route('imoveis.store')}}"
        :categoriesList="$categoriesList" :businessList="$businessList"
        :citiesList="$citiesList"></x-admin.product.productForm>
</x-layouts.admin>j