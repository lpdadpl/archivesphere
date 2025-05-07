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
            [
                'name' => 'admin_as',
                'email' => 'admin@example.com',
                'password' => Hash::make('123456'), // Contraseña encriptada
                'role_id' => 1, // Rol de administrador
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'user_as',
                'email' => 'user@example.com',
                'password' => Hash::make('123456'), // Contraseña encriptada
                'role_id' => 2, // Rol de usuario estándar
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
