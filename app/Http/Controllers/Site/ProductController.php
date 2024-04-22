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

        $infos = [
            [
                "category" => "casa",
                "bedrooms" => "3", // quartos
                "bathroom" => "2", // banheiros
                "cars_in_garage" => 2,
                "home_size" => "128", // metros quadrados
                "Description" => "Casa bem localizada, próximo ao centro. Ótima vista e espaço.",
                "modality" => "aluguel",
                "address" => [
                    "city" => "Taquara",
                    "state" => "RS",
                    "country" => "Morro do Leôncio",
                    "number" => "7892"
                ],
                "value" => "1200",
                "images" => ["image1.jpg", "image2.jpg", "image3.jpg"]
            ],
            [
                "category" => "apartamento",
                "bedrooms" => "2",
                "bathroom" => "1",
                "cars_in_garage" => 1,
                "home_size" => "80",
                "Description" => "Apartamento recém-reformado, localização central. Segurança 24 horas.",
                "modality" => "venda",
                "address" => [
                    "city" => "Porto Alegre",
                    "state" => "RS",
                    "country" => "Centro",
                    "number" => "456"
                ],
                "value" => "250000",
                "images" => ["image4.jpg", "image5.jpg"]
            ],
            [
                "category" => "sobrado",
                "bedrooms" => "4",
                "bathroom" => "3",
                "cars_in_garage" => 2,
                "home_size" => "200",
                "Description" => "Sobrado amplo e arejado, ideal para famílias grandes. Área de lazer completa.",
                "modality" => "aluguel",
                "address" => [
                    "city" => "Novo Hamburgo",
                    "state" => "RS",
                    "country" => "Bairro Primavera",
                    "number" => "123"
                ],
                "value" => "1800",
                "images" => ["image6.jpg", "image7.jpg", "image8.jpg"]
            ],
            // Adicionando mais 10 itens...
            [
                "category" => "casa",
                "bedrooms" => "4",
                "bathroom" => "3",
                "cars_in_garage" => 3,
                "home_size" => "180",
                "Description" => "Casa espaçosa com piscina e churrasqueira. Ótima localização residencial.",
                "modality" => "venda",
                "address" => [
                    "city" => "Gramado",
                    "state" => "RS",
                    "country" => "Bairro Bela Vista",
                    "number" => "789"
                ],
                "value" => "550000",
                "images" => ["image9.jpg", "image10.jpg", "image11.jpg"]
            ],
            [
                "category" => "apartamento",
                "bedrooms" => "1",
                "bathroom" => "1",
                "cars_in_garage" => 1,
                "home_size" => "60",
                "Description" => "Apartamento compacto com ótima vista da cidade.",
                "modality" => "aluguel",
                "address" => [
                    "city" => "Caxias do Sul",
                    "state" => "RS",
                    "country" => "Centro",
                    "number" => "987"
                ],
                "value" => "900",
                "images" => ["image12.jpg", "image13.jpg"]
            ],
            [
                "category" => "sobrado",
                "bedrooms" => "3",
                "bathroom" => "2",
                "cars_in_garage" => 2,
                "home_size" => "150",
                "Description" => "Sobrado moderno com acabamentos de alto padrão. Condomínio fechado.",
                "modality" => "venda",
                "address" => [
                    "city" => "Gravataí",
                    "state" => "RS",
                    "country" => "Condomínio Sol Nascente",
                    "number" => "321"
                ],
                "value" => "780000",
                "images" => ["image14.jpg", "image15.jpg", "image16.jpg"]
            ],
            [
                "category" => "casa",
                "bedrooms" => "5",
                "bathroom" => "4",
                "cars_in_garage" => 4,
                "home_size" => "250",
                "Description" => "Casa luxuosa com ampla área de lazer. Vista para o mar.",
                "modality" => "venda",
                "address" => [
                    "city" => "Florianópolis",
                    "state" => "SC",
                    "country" => "Praia dos Ingleses",
                    "number" => "741"
                ],
                "value" => "1250000",
                "images" => ["image17.jpg", "image18.jpg", "image19.jpg"]
            ],
            [
                "category" => "apartamento",
                "bedrooms" => "2",
                "bathroom" => "2",
                "cars_in_garage" => 1,
                "home_size" => "90",
                "Description" => "Apartamento mobiliado em condomínio com piscina e academia.",
                "modality" => "aluguel",
                "address" => [
                    "city" => "Balneário Camboriú",
                    "state" => "SC",
                    "country" => "Centro",
                    "number" => "1234"
                ],
                "value" => "2500",
                "images" => ["image20.jpg", "image21.jpg"]
            ],
            [
                "category" => "sobrado",
                "bedrooms" => "4",
                "bathroom" => "3",
                "cars_in_garage" => 2,
                "home_size" => "180",
                "Description" => "Sobrado amplo em bairro tranquilo. Próximo a escolas e comércios.",
                "modality" => "venda",
                "address" => [
                    "city" => "Itajaí",
                    "state" => "SC",
                    "country" => "Bairro das Nações",
                    "number" => "567"
                ],
                "value" => "620000",
                "images" => ["image22.jpg", "image23.jpg", "image24.jpg"]
            ],
            [
                "category" => "casa",
                "bedrooms" => "3",
                "bathroom" => "2",
                "cars_in_garage" => 2,
                "home_size" => "120",
                "Description" => "Casa térrea em condomínio fechado. Área de lazer completa.",
                "modality" => "aluguel",
                "address" => [
                    "city" => "Joinville",
                    "state" => "SC",
                    "country" => "Condomínio Jardim das Flores",
                    "number" => "890"
                ],
                "value" => "1800",
                "images" => ["image25.jpg", "image26.jpg"]
            ],
            [
                "category" => "apartamento",
                "bedrooms" => "1",
                "bathroom" => "1",
                "cars_in_garage" => 1,
                "home_size" => "50",
                "Description" => "Apartamento compacto e aconchegante. Localização privilegiada.",
                "modality" => "venda",
                "address" => [
                    "city" => "Blumenau",
                    "state" => "SC",
                    "country" => "Centro",
                    "number" => "246"
                ],
                "value" => "150000",
                "images" => ["image27.jpg", "image28.jpg"]
            ],
            [
                "category" => "sobrado",
                "bedrooms" => "4",
                "bathroom" => "3",
                "cars_in_garage" => 2,
                "home_size" => "200",
                "Description" => "Sobrado espaçoso em bairro residencial. Fácil acesso às principais vias.",
                "modality" => "aluguel",
                "address" => [
                    "city" => "Chapecó",
                    "state" => "SC",
                    "country" => "Bairro Universitário",
                    "number" => "135"
                ],
                "value" => "2200",
                "images" => ["image29.jpg", "image30.jpg", "image31.jpg"]
            ]
        ];

        // Agora o array $infos possui 13 elementos, cada um representando um imóvel diferente.


        return view('site.index', ["infos" => $infos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
        //
    }

    /**
     * Show the form for editing the specified resource.
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
