<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Alejandro',  // Tu nombre completo
            'email' => 'alexch4231@gmail.com',  // Tu correo electrónico
            'password' => Hash::make('a135791a'),  // Contraseña cifrada
        ]);
    }
}
