<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    public function run(): void
    {
        // Cliente administrador
        Cliente::factory()->create([
            'nombre' => 'Admin Principal',
            'email' => 'admin@empresa.com',
            'esadmin' => true,
        ]);

        // Clientes normales
        Cliente::factory(20)->create();
    }
}