<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Llama al RoleSeeder primero
        $this->call(RoleSeeder::class);

        // Crea usuarios después de tener roles
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Opcional: crea más usuarios si quieres
        // User::factory(10)->create();
    }
}
