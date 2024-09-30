<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    private $cities = [
        "Xangrilá",
        "Capão da canoa",
        "Capão novo",
        "Albatroz",
        "Arroio do Sal"
    ];

    public function run(): void
    {
        foreach ($this->cities as $city) {
            DB::table("cities")->insert([
                "name" => $city,
                "visible" => true,
            ]);
        }
    }
}
