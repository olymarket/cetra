<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Statu;
use Jenssegers\Date\Date;

class StatuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         //$status = Statu::factory(3)->create();

         Statu::create([
            'idStatu'     => '1',
            'n'        => 'Active',
            'abbreviation'=> 'ACT',
            'description' => '',
            'date'        => Date::now()->format('Y-m-d'),
            'time'        => Date::now()->format('g:i:s'),
        ]);

        Statu::create([
            'idStatu'     => '2',
            'name'        => 'Suspended',
            'abbreviation'=> 'SUS',
            'description' => '',
            'date'        => Date::now()->format('Y-m-d'),
            'time'        => Date::now()->format('g:i:s'),
        ]);
    }
}
