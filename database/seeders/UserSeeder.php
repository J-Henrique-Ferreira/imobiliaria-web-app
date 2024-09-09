<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Henrique',
            'email' => 'teste@teste.com',
            'phone_number' => '1234567890',
            'role' => 'admin',
            'password' => Hash::make('password'), // Use Hash para a senha
        ]);
    }
}
