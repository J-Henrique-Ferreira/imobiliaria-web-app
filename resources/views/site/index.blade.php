<x-layouts.site title="início">


<section>
    @foreach($products as $product) 

    <x-site.productCard title={{$product}}> </x-site.productCard>
    @endForeach
</section>

</x-layouts.site>

<!-- 
      [
        "category" => "casa",
        "bedrooms" => "3", // quartos
        "bathroom" => "2", // banheiros
        "cars_in_garage" => 2,
        "home_size" => "128", // metros quadrados
        "title" => "Casa bem localizada, próximo ao centro. Ótima vista e espaço.",
        "Description" => "Casa bem localizada, próximo ao centro. Ótima vista e espaço.",
        "modality" => "aluguel",
        "address" => [
            "city" => "Taquara",
            "state" => "RS",
            "country" => "Morro do Leôncio",
            "number" => "7892"
        ],
        "value" => "1200",
        "default_image" => "https://p2.trrsf.com/image/fget/cf/940/0/images.terra.com/2018/03/27/casa-linda-minimalista-com-piscina.jpg",
        "images" => ["image1.jpg", "image2.jpg", "image3.jpg"]
    ],

 -->