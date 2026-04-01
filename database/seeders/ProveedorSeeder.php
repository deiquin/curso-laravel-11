<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Proveedor;

class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Proveedor administrador
        Proveedor::factory()->create([
            'nombre' => 'Proveedor Admin',
            'edad' => 40,
            'email' => 'admin@proveedor.com',
            'esadmin' => true,
        ]);

        // Proveedores normales
        Proveedor::factory(20)->create();
    }
}
