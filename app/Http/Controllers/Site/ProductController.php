<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
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
                "category" => "apartamento",
                "bedrooms" => "2",
                "bathroom" => "1",
                "cars_in_garage" => 1,
                "size" => "80",
                "title" => "Apartamento recém-reformado, localização central. Segurança 24 horas.",
                "description" => "Apartamento recém-reformado, localização central. Segurança 24 horas.",
                "modality" => "venda",
                "address" => [
                    "city" => "Porto Alegre",
                    "state" => "RS",
                    "country" => "Centro",
                    "number" => "456"
                ],
                "value" => "250000",
                "default_image" => "https://imgbr.imovelwebcdn.com/avisos/2/29/93/23/22/11/720x532/4263982728.jpg?isFirstImage=true",
                "images" => ["image4.jpg", "image5.jpg"]
            ],
            [
                "category" => "sobrado",
                "bedrooms" => "4",
                "bathroom" => "3",
                "cars_in_garage" => 2,
                "size" => "200",
                "title" => "Casa bem localizada, próximo ao centro. Ótima vista e espaço.",
                "description" => "Sobrado amplo e arejado, ideal para famílias grandes. Área de lazer completa.",
                "modality" => "aluguel",
                "address" => [
                    "city" => "Novo Hamburgo",
                    "state" => "RS",
                    "country" => "Bairro Primavera",
                    "number" => "123",
                ],
                "value" => "1800",
                "default_image" => "https://tribuneonlineng.com/wp-content/uploads/2023/08/Real-estate.jpg",
                "images" => ["image6.jpg", "image7.jpg", "image8.jpg"]
            ],
            [
                "category" => "casa",
                "bedrooms" => "4",
                "bathroom" => "3",
                "cars_in_garage" => 3,
                "size" => "180",
                "title" => "Casa bem localizada, próximo ao centro. Ótima vista e espaço.",
                "description" => "Casa espaçosa com piscina e churrasqueira. Ótima localização residencial.",
                "modality" => "venda",
                "address" => [
                    "city" => "Gramado",
                    "state" => "RS",
                    "country" => "Bairro Bela Vista",
                    "number" => "789"
                ],
                "value" => "550000",
                "default_image" => "https://fotos.sobressai.com.br/fotos/278/1100341/23999945_g.jpg",
                "images" => ["image9.jpg", "image10.jpg", "image11.jpg"]
            ],
            [
                "category" => "apartamento",
                "bedrooms" => "1",
                "bathroom" => "1",
                "cars_in_garage" => 1,
                "size" => "60",
                "title" => "Casa bem localizada, próximo ao centro. Ótima vista e espaço.",
                "description" => "Apartamento compacto com ótima vista da cidade.",
                "modality" => "aluguel",
                "address" => [
                    "city" => "Caxias do Sul",
                    "state" => "RS",
                    "country" => "Centro",
                    "number" => "987"
                ],
                "value" => "900",
                "default_image" => "https://imgbr.imovelwebcdn.com/avisos/2/29/92/78/51/24/720x532/4247834075.jpg?isFirstImage=true",
                "images" => ["image12.jpg", "image13.jpg"]
            ],
            [
                "category" => "sobrado",
                "bedrooms" => "3",
                "bathroom" => "2",
                "cars_in_garage" => 2,
                "size" => "150",
                "title" => "Casa bem localizada, próximo ao centro. Ótima vista e espaço.",
                "description" => "Sobrado moderno com acabamentos de alto padrão. Condomínio fechado.",
                "modality" => "venda",
                "address" => [
                    "city" => "Gravataí",
                    "state" => "RS",
                    "country" => "Condomínio Sol Nascente",
                    "number" => "321"
                ],
                "value" => "780000",
                "default_image" => "https://p2.trrsf.com/image/fget/cf/940/0/images.terra.com/2018/03/27/casa-linda-minimalista-com-piscina.jpg",
                "images" => ["image14.jpg", "image15.jpg", "image16.jpg"]
            ],
            [
                "category" => "casa",
                "bedrooms" => "5",
                "bathroom" => "4",
                "cars_in_garage" => 4,
                "size" => "250",
                "title" => "Casa bem localizada, próximo ao centro. Ótima vista e espaço.",
                "description" => "Casa luxuosa com ampla área de lazer. Vista para o mar.",
                "modality" => "venda",
                "address" => [
                    "city" => "Florianópolis",
                    "state" => "SC",
                    "country" => "Praia dos Ingleses",
                    "number" => "741"
                ],
                "value" => "1250000",
                "default_image" => "https://imgbr.imovelwebcdn.com/avisos/2/29/89/83/72/27/720x532/4149207307.jpg?isFirstImage=true",
                "images" => ["image17.jpg", "image18.jpg", "image19.jpg"]
            ],
            [
                "category" => "apartamento",
                "bedrooms" => "2",
                "bathroom" => "2",
                "cars_in_garage" => 1,
                "size" => "90",
                "title" => "Casa bem localizada, próximo ao centro. Ótima vista e espaço.",
                "description" => "Apartamento mobiliado em condomínio com piscina e academia.",
                "modality" => "aluguel",
                "address" => [
                    "city" => "Balneário Camboriú",
                    "state" => "SC",
                    "country" => "Centro",
                    "number" => "1234"
                ],
                "value" => "2500",

                "default_image" => "https://imgbr.imovelwebcdn.com/avisos/2/29/84/37/63/90/720x532/3961039985.jpg?isFirstImage=true",
                "images" => ["image20.jpg", "image21.jpg"]
            ],
            [
                "category" => "sobrado",
                "bedrooms" => "4",
                "bathroom" => "3",
                "cars_in_garage" => 2,
                "size" => "180",
                "title" => "Casa bem localizada, próximo ao centro. Ótima vista e espaço.",
                "description" => "Sobrado amplo em bairro tranquilo. Próximo a escolas e comércios.",
                "modality" => "venda",
                "address" => [
                    "city" => "Itajaí",
                    "state" => "SC",
                    "country" => "Bairro das Nações",
                    "number" => "567"
                ],
                "value" => "620000",
                "default_image" => "https://imgbr.imovelwebcdn.com/avisos/2/29/91/02/78/00/720x532/4186964833.jpg?isFirstImage=true",
                "images" => ["image22.jpg", "image23.jpg", "image24.jpg"]
            ],
            [
                "category" => "casa",
                "bedrooms" => "3",
                "bathroom" => "2",
                "cars_in_garage" => 2,
                "size" => "120",
                "title" => "Casa bem localizada, próximo ao centro. Ótima vista e espaço.",
                "description" => "Casa térrea em condomínio fechado. Área de lazer completa.",
                "modality" => "aluguel",
                "address" => [
                    "city" => "Joinville",
                    "state" => "SC",
                    "country" => "Condomínio Jardim das Flores",
                    "number" => "890"
                ],
                "value" => "1800",
                "default_image" => "https://i.ytimg.com/vi/T2wIxUjqPFM/maxresdefault.jpg",
                "images" => ["image25.jpg", "image26.jpg"]
            ],
            [
                "category" => "apartamento",
                "bedrooms" => "1",
                "bathroom" => "1",
                "cars_in_garage" => 1,
                "size" => "50",
                "title" => "Casa bem localizada, próximo ao centro. Ótima vista e espaço.",
                "description" => "Apartamento compacto e aconchegante. Localização privilegiada.",
                "modality" => "venda",
                "address" => [
                    "city" => "Blumenau",
                    "state" => "SC",
                    "country" => "Centro",
                    "number" => "246"
                ],
                "value" => "150000",
                "default_image" => "https://p2.trrsf.com/image/fget/cf/940/0/images.terra.com/2018/03/27/casa-linda-minimalista-com-piscina.jpg",
                "images" => ["image27.jpg", "image28.jpg"]
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

        $bannersList = [
            [
                "src" => "https://img.kenlo.io/VWRCUkQ2Tnp3d1BJRDBJVe1szBgxSbxEJs4E8PoAzyCur-yjcWvylTZaIWQxUUFHJ%2BMbgmN3V8Aj%2B0Ih2sgp6R4-m9EYQLL55nLWh9nT4tqVrU3R9p%2BJtuKF38mmBpyHldxv2vCtHAHwv6NuFtcpOhoiOuU-XRX3W46bNX5NpCLJ417MU7ZxSWNT2Qwo1g9WyxH9F4HmpQFozg%3D%3D.png",
                "alt" => "imagem 1 do banner"
            ],
            [
                "src" => "https://storage.pixteller.com/designs/designs-images/2019-05-15/01/real-estate-modern-banner-1-5cdbf09815644.png",
                "https://s3.amazonaws.com/thumbnails.venngage.com/template/83840a84-2f67-4924-ac58-22d736c86712.png",
                "alt" => "imagem 2 do banner"
            ],
            [
                "src" => "https://athenasimobiliaria.com.br/wp-content/uploads/2021/02/banner-1.jpg",
                "https://s3.amazonaws.com/thumbnails.venngage.com/template/83840a84-2f67-4924-ac58-22d736c86712.png",
                "alt" => "imagem 3 do banner"
            ]
        ];

        return view('site.index', ["products" => $products, "bannersList" => $bannersList]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //,,
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        $product = [
            "category" => "casa",
            "bedrooms" => "3", // quartos
            "bathroom" => "2", // banheiros
            "cars_in_garage" => 2,
            "size" => "128", // metros quadrados
            "title" => "Casa bem localizada, próximo ao centro. Ótima vista e espaço.",
            "description" => "RECREIO DOS BANEIRANTES (72352) - CASA TRIPLEX à VENDA, no condomínio Terra América, Maravilhosa casa com espaço gourmet, churrasqueira, piscina, salão em 03 ambientes decorado, lavabo, copa cozinha planejada, quarto normal, área e banheiro de serviço, SEGUNDO PISO: 04 SUÍTES. TERCEIRO PISO: Sótão que está usando como escritório e banheiro, que pode ser mais uma suíte. Condomínio com infraestrutura e segurança 24 h. Pagamento à vista.Financiamento bancário. Estuda permuta por apto menor valor no Recreio, ou na ABM Barra. AGENDE já sua visita com corretor da PHD Imobiliária!

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

        return view('site.productPage', ["product" => $product]);
    }

    /**
     * Show the form for editing the specified resource.,,
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        //
    }
}
