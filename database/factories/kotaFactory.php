<?php

namespace Database\Factories;

use App\Models\kota;
use Illuminate\Database\Eloquent\Factories\Factory;

class kotaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = kota::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->city (),
            'id_provinsi' =>mt_rand(1,10)

        ];
    }
}
