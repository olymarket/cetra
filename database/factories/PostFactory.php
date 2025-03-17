<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\{Categori, Post, Statu, User};
use Illuminate\Support\Str;
use Jenssegers\Date\Date;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Post::class;

    public function definition(): array
    {
        $name = $this->faker->unique()->text('60');
            return [
                'idStatu'       => Statu::all()->random()->idStatu,
                'idUser'        => User::all()->random()->idUser,
                'title'         => $name,
                'slug'          => Str::slug($name) . "-" . Date::now(),
                'image'         => $this->faker->imageUrl(480, 480, null, false),
                'idCategori' => Categori::all()->random()->idCategori,
                'description'   => $this->faker->text(130),
                'content'       => $this->faker->text(300),
                'date'          => Date::now()->format('Y-m-d'),
                'time'          => Date::now()->format('g:i:s'),
                //'image'         => 'storage/post/' . $this->faker->image('public/storage/post', 480, 480, null,false),
                //'date'          => Date::now()->format('l j F Y g:i:s a'),
            ];
    }
}
