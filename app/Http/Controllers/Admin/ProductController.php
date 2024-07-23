<?php

namespace App\Http\Controllers\Admin;

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
        $products =
            [
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
    public function store(Request $request)
    {
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
