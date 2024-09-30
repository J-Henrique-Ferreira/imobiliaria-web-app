<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    private $categories = [
        "Casa",
        "Apartamento",
        "Terreno",
        "Garagem",
        "Sítio",
        "Cabanha",
        "Hospedagem"
    ];
    public function run(): void
    {
        foreach ($this->categories as $category) {
            DB::table("categories")->insert(
                [
                    "name" => $category,
                    "visible" => true,
                ]
            );
        }
    }
}
