<x-layouts.admin containerTitle="Adicionar imóvel">
    <x-admin.productForm methodProp="post" actionProp="{{route('imoveis.store')}}" :categoriesList="$categoriesList" :businessList="$businessList" :citiesList="$citiesList"></x-admin.productForm>
</x-layouts.admin>j