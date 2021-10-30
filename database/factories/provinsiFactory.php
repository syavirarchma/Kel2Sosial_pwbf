<?php

namespace Database\Factories;

use App\Models\provinsi;
use Illuminate\Database\Eloquent\Factories\Factory;

class provinsiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = provinsi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->city(),
        ];
    }
}
