<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Jenssegers\Date\Date;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //User::factory(10)->create();

        User::create([
            'idUser'            => '1',
            'idStatu'           => '1',
            'idRole'            => '1',
            'name'              => 'cetra',
            'email'             => 'cetra@cetra.com.mx',
            'remember_token'    => Str::random(20),
            'password'          => bcrypt('uBJf8)kUWni5'),
            'date'              => Date::now()->format('Y-m-d'),
            'time'              => Date::now()->format('g:i:s'),
        ]);

        User::create([
            'idUser'            => '2',
            'idStatu'           => '1',
            'idRole'            => '1',
            'name'              => 'omar',
            'email'             => 'orios@devon.mx',
            'remember_token'    => Str::random(20),
            'password'          => bcrypt('12Qwas<zx,.-'),
            'date'              => Date::now()->format('Y-m-d'),
            'time'              => Date::now()->format('g:i:s'),
        ]);

    }
}
