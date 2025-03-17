<?php

namespace Database\Seeders;

use App\Models\Categori;
use Illuminate\Database\Seeder;
use Jenssegers\Date\Date;

class CategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //$categories = Categori::factory(50)->create();

        Categori::create([
            'idStatu'     => '1',
            'title'       => 'cetra',
            'slug'        => 'cetra',
            'description' => '...',
            'date'        => Date::now()->format('Y-m-d'),
            'time'        => Date::now()->format('g:i:s'),
        ]);
    }
}
