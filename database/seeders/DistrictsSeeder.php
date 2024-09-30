<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    private $districts = [
        "Arpoador",
        "Atlântida",
        "Centro",
        "Guará",
        "Maristela",
        "Noiva do Mar",
        "Praia dos Coqueiros",
        "Rainha do Mar",
    ];

    public function run(): void
    {
        foreach ($this->districts as $district) {
            DB::table("districts")->insert(
                [
                    "name" => $district,
                    "visible" => true,
                    "city_id" => "1"
                ]
            );
        }
    }
}
