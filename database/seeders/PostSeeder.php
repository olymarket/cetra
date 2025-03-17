<?php

namespace Database\Seeders;

use App\Models\Post;
use Jenssegers\Date\Date;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = Post::factory(100)->create();

        Post::create([
            'idStatu'     => '1',
            'idUser'      => '1',
            'title'       => 'HOW FURNITURE RENTAL FACILITATES TRANSITION TO A NEW CITY',
            'slug'        => 'how-furniture-rental-facilitates-transition-to-a-new-city',
            'image'       => '/storage/post/1.webp',
            'idCategori'  => '1',
            'description' => '...',
            'content'     => '...',
            'date'        => Date::now()->format('Y-m-d'),
            'time'        => Date::now()->format('g:i:s'),
        ]);

        Post::create([
            'idStatu'     => '1',
            'idUser'      => '1',
            'title'       => 'THE ULTIMATE GUIDE FOR EXPATS: ADJUSTING TO LIFE IN MEXICO WITH STYLE AND COMFORT',
            'slug'        => 'The-ultimate-guide-for-expats:-adjusting-to-life-in-mexico-with-style-and-comfort',
            'image'       => '/storage/post/2.webp',
            'idCategori'  => '1',
            'description' => '...',
            'content'     => '...',
            'date'        => Date::now()->format('Y-m-d'),
            'time'        => Date::now()->format('g:i:s'),
        ]);

        Post::create([
            'idStatu'     => '1',
            'idUser'      => '1',
            'title'       => 'TAX AND FINANCIAL BENEFITS OF FURNITURE RENTAL FOR COMPANIES AND EXECUTIVES',
            'slug'        => 'Tax and financial benefits of furniture rental for companies and executives',
            'image'       => '/storage/post/3.webp',
            'idCategori'  => '1',
            'description' => '...',
            'content'     => '...',
            'date'        => Date::now()->format('Y-m-d'),
            'time'        => Date::now()->format('g:i:s'),
        ]);
    }
}
