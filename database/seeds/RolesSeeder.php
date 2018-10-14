<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesSeeder extends Seeder
{
    public function run()
    {
        $cliente = Role::create([
            'name' => 'Cliente',
            'slug' => 'cliente',
            'permissions' => [
                'view-produto' => true,
            ]
        ]);
        $funcionario = Role::create([
            'name' => 'Funcionário',
            'slug' => 'funcionario',
            'permissions' => [
                'create-produto' => true,
                'update-produto' => true,
                'delete-produto' => true,
            ]
        ]);
    }
}