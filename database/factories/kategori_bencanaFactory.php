<?php

namespace Database\Factories;

use App\Models\kategori_bencana;
use Illuminate\Database\Eloquent\Factories\Factory;

class kategori_bencanaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = kategori_bencana::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kategori_bencana' => $this->faker->name(),            
            'created_at' => $this->faker->date(now()),
            'updated_at' => $this->faker->date(now()),
        ];
    }
}
