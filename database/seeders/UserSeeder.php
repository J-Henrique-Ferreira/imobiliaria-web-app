<?php

namespace Database\Seeders;

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
            'name' => 'João Henrique ferreira',
            'email' => 'joaof6418@gmail.com',
            'phone_number' => 'password',
            'role' => 'admin',
            'password' => Hash::make('password'), // Use Hash para a senha
        ]);
    }
}
