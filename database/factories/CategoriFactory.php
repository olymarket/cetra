<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Categori;
use Illuminate\Support\Str;
use Jenssegers\Date\Date;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categori>
 */
class CategoriFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Categori::class;

    public function definition(): array
    {
        $name = $this->faker->unique()->sentence(2);
        return [
            'idStatu'       => $this->faker->randomElement(['1', '2']),
            'title'         => $name,
            'slug'          => Str::slug($name),
            'date'          => Date::now()->format('Y-m-d'),
            'time'          => Date::now()->format('g:i:s'),
            'description'   => $this->faker->text(130),
            //'icon'        => 'storage/post/' . $this->faker->image('public/storage/post', 16, 16, null,false),
        ];
    }
}
