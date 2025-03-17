<?php

namespace Database\Seeders;

use App\Models\Roles;
use Jenssegers\Date\Date;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Roles::create([
            'idRole'            => '1',
            'idStatu'           => '1',
            'name'              => 'Administrador',
            'description'       => 'Accesso a todo el sistema',
            'date'              => Date::now()->format('Y-m-d'),
            'time'              => Date::now()->format('g:i:s'),
        ]);

        Roles::create([
            'idRole'            => '2',
            'idStatu'           => '1',
            'name'              => 'Publico',
            'description'       => 'cualquier usuario',
            'date'              => Date::now()->format('Y-m-d'),
            'time'              => Date::now()->format('g:i:s'),
        ]);
    }
}
