<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Company;
use App\Models\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Crea los roles si no están creados
        $this->call(RoleSeeder::class);

        // 2. Crea una empresa de prueba
        $company = \App\Models\Company::firstOrCreate(
            ['slug' => 'empresa-demo'],
            [
                'name' => 'Empresa Demo',
                'cif' => 'B12345678',
                'email' => 'contacto@empresademo.com'
            ]
        );

        // 3. Obtenemos los roles
        $superadminRole = Role::where('slug', 'superadmin')->first();
        $usuarioRole = Role::where('slug', 'usuario')->first();

        // 4. Creamos un usuario Superadmin si no existe
        if (!User::where('email', 'admin@admin.com')->exists()) {
            User::factory()->create([
                'name' => 'Super Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('password'),
                'role_id' => $superadminRole->id,
                'company_id' => $company->id,
            ]);
        }

        // 5. Creamos un usuario básico si no existe
        if (!User::where('email', 'usuario@demo.com')->exists()) {
            User::factory()->create([
                'name' => 'Usuario Demo',
                'email' => 'usuario@demo.com',
                'password' => bcrypt('password'),
                'role_id' => $usuarioRole->id ?? null,
                'company_id' => $company->id,
            ]);
        }
    }
}