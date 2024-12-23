<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = range(1, 5); // IDs das cidades
        $faker = \Faker\Factory::create('pt_BR');

        $products = [];
        for ($i = 1; $i <= 30; $i++) {
            $cityId = $cities[array_rand($cities)]; // Seleciona uma cidade aleatória
            $districtId = 1; // Sempre o primeiro bairro da cidade

            $products[] = [
                'category_id' => $faker->numberBetween(1, 5), // Exemplo de IDs de categorias
                'business_id' => $faker->numberBetween(1, 3), // Exemplo de IDs de negócios
                'author_id' => 1, // Exemplo de IDs de autores
                'address_city_id' => $cityId,
                'address_district_id' => $districtId,
                'address_street' => $faker->streetName,
                'address_number' => $faker->buildingNumber,
                'bedroom' => $faker->numberBetween(1, 5),
                'bathroom' => $faker->numberBetween(1, 4),
                'suite' => $faker->numberBetween(0, 2),
                'parking_space' => $faker->numberBetween(0, 3),
                'area_size' => $faker->numberBetween(50, 300),
                'value' => $faker->randomFloat(2, 100000, 1000000), // Valores entre 100.000 e 1.000.000
                'condominium' => $faker->randomFloat(2, 200, 2000), // Condomínio entre 200 e 2.000
                'iptu' => $faker->randomFloat(2, 500, 5000), // IPTU entre 500 e 5.000
                'description' => $faker->sentence(10),
                'images_list_url' => json_encode([]),
                'visible' => $faker->boolean,
                'whoner_contact' => $faker->phoneNumber,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('products')->insert($products);
    }
}
