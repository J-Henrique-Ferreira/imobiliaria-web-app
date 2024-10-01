<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BusinessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    private $businessList = [
        "Venda",
        "Aluguel",
        "Temporada",
        "Hospedagem",
    ];

    public function run(): void
    {
        foreach ($this->businessList as $business) {
            DB::table("business")->insert(
                [
                    "name" => $business,
                    "visible" => true,
                ]
            );
        }
    }
}
