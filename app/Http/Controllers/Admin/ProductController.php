<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Repositories\Contracts\ProductRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Product\ProductStoreUpdateRequest;

class ProductController extends Controller
{
    public function __construct(private ProductRepositoryInterface $repository)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = [
            [
                "category" => "casa",
                "bedrooms" => "3", // quartos
                "bathroom" => "2", // banheiros
                "cars_in_garage" => 2,
                "size" => "128", // metros quadrados
                "title" => "Casa bem localizada, próximo ao centro. Ótima vista e espaço.",
                "description" => "Casa bem localizada, próximo ao centro. Ótima vista e espaço.",
                "modality" => "aluguel",
                "address" => [
                    "city" => "Taquara",
                    "state" => "RS",
                    "country" => "Morro do Leôncio",
                    "number" => "7892"
                ],
                "value" => "1200",
                "default_image" => "https://cf.bstatic.com/xdata/images/hotel/max1024x768/476329454.jpg?k=8b8963ae5ac81ee0ee895e2b1e6cc3986e1d258daeca6210777adde62d660166&o=&hp=1",
                "images" => ["image1.jpg", "image2.jpg", "image3.jpg"]
            ],
            [
                "category" => "sobrado",
                "bedrooms" => "4",
                "bathroom" => "3",
                "cars_in_garage" => 2,
                "size" => "200",
                "title" => "Casa bem localizada, próximo ao centro. Ótima vista e espaço.",
                "description" => "Sobrado espaçoso em bairro residencial. Fácil acesso às principais vias.",
                "modality" => "aluguel",
                "address" => [
                    "city" => "Chapecó",
                    "state" => "SC",
                    "country" => "Bairro Universitário",
                    "number" => "135"
                ],
                "value" => "2200",
                "default_image" => "https://p2.trrsf.com/image/fget/cf/940/0/images.terra.com/2018/03/27/casa-linda-minimalista-com-piscina.jpg",
                "images" => ["image29.jpg", "image30.jpg", "image31.jpg"]
            ]
        ];

        return view("admin.product.index", ["products" => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.product.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductStoreUpdateRequest $request)
    {
        $this->repository->add($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $product = [
            "category" => "casa",
            "bedrooms" => "3", // quartos
            "bathroom" => "2", // banheiros
            "cars_in_garage" => 2,
            "size" => "128", // metros quadrados
            "title" => "Casa bem localizada, próximo ao centro. Ótima vista e espaço.",
            "description" => "
            Imóvel dos Seus Sonhos à Venda!
            Localização Impecável:
            Este maravilhoso apartamento está situado no coração do [Bairro/Região], uma das áreas mais valorizadas da cidade. Com fácil acesso a escolas, supermercados, shoppings e parques, a localização oferece tudo o que você precisa para uma vida prática e confortável.

            Design e Conforto:
            Com 3 quartos espaçosos, incluindo uma suíte master com closet, este imóvel foi projetado para oferecer o máximo de conforto e elegância. A sala de estar ampla e iluminada é perfeita para receber amigos e familiares, enquanto a cozinha moderna, com armários planejados e eletrodomésticos de última geração, torna o dia a dia mais prático e agradável.

            Infraestrutura Completa:
            O condomínio oferece uma infraestrutura completa para toda a família, incluindo piscina, academia, salão de festas, área de churrasco, playground e segurança 24 horas. Tudo pensado para proporcionar qualidade de vida e bem-estar aos moradores.

            Sustentabilidade:
            Além do conforto e da localização privilegiada, este imóvel se destaca por suas características sustentáveis, como sistemas de captação de água da chuva, painéis solares e iluminação LED em todas as áreas comuns, contribuindo para um futuro mais sustentável e economia nas contas.

            Preço Imbatível:
            Tudo isso por um preço que cabe no seu bolso! Não perca a oportunidade de investir em um imóvel que combina conforto, praticidade e localização estratégica. Condições especiais de financiamento e negociação direta com o proprietário.

            Agende sua Visita:
            Entre em contato conosco e agende uma visita para conhecer este incrível apartamento. Nossa equipe está pronta para atendê-lo e ajudar a transformar este sonho em realidade.
            ",
            "modality" => "Aluguel",
            "address" => [
                "city" => "Taquara",
                "state" => "RS",
                "country" => "Morro do Leôncio",
                "rua" => "",
                "number" => "7892"
            ],
            "value" => "1200",
            "iptu" => "250",
            "condominio" => "1400",
            "code" => "245654",
            "default_image" => "https://cdn.onekindesign.com/wp-content/uploads/2019/11/Striking-Modern-Villa-Design-Marmol-Radziner-01-1-Kindesign.jpg",
            "https://s3.amazonaws.com/thumbnails.venngage.com/template/83840a84-2f67-4924-ac58-22d736c86712.png",
            "images" =>
            [
                [
                    "src" => "https://img.freepik.com/free-photo/design-house-modern-villa-with-open-plan-living-private-bedroom-wing-large-terrace-with-privacy_1258-169741.jpg",
                    "alt" => "imagem 1 do banner"
                ],
                [
                    "src" => "https://cdn.onekindesign.com/wp-content/uploads/2019/11/Striking-Modern-Villa-Design-Marmol-Radziner-01-1-Kindesign.jpg",
                    "https://s3.amazonaws.com/thumbnails.venngage.com/template/83840a84-2f67-4924-ac58-22d736c86712.png",
                    "alt" => "imagem 2 do banner"
                ],
                [
                    "src" => "https://zegebeya.com/wp-content/uploads/2023/03/villa.jpg",
                    "alt" => "imagem 3 do banner"
                ],
                [
                    "src" =>  "https://www.digitow.com.br/wp-content/uploads/2020/10/home-office-historia-digitow.jpg",
                    "alt" => "imagem 4 do banner"
                ],
                [
                    "src" => "https://cullumhomes.com/assets/blog/2022%20Interior%20Design%20Trends%20for%20Luxury%20Homes%20Featured.jpg",
                    "alt" => "imagem 6 do banner"
                ]
            ],
        ];

        return view("admin.product.show", ["product" => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        return view('admin.product.update', []);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
