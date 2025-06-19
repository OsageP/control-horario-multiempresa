<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            ['name' => 'Super Admin', 'slug' => 'superadmin'],
            ['name' => 'Admin Empresa', 'slug' => 'admin_empresa'],
            ['name' => 'Encargado', 'slug' => 'encargado'],
            ['name' => 'Usuario', 'slug' => 'usuario'],
        ];

        foreach ($roles as $role) {
            Role::firstOrCreate([
                'slug' => $role['slug']
            ], $role);
        }
    }
}