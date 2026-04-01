<?php

namespace Database\Seeders;

use App\Models\categoria;
use App\Models\Chofer;
use App\Models\User;
use App\Models\Vendedor;
use App\Models\Post;
use App\Models\Mensaje;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory(10)->create();

        // Vendedor::factory(20)->create();

        // Chofer::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        // categoria::factory(20)->create();

        // Post::factory(20)->create();

        // Mensaje::factory(20)->create();

        //$this->call(ClienteSeeder::class);

        //$this->call(ProveedorSeeder::class);
    }
}
