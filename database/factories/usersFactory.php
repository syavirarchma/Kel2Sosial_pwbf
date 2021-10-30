<?php

namespace Database\Factories;

use App\Models\users;
use Illuminate\Database\Eloquent\Factories\Factory;

class usersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = users::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'tgl_lahir' => $this->faker->date(),
            'password' => $this->faker->password(8, 32),
            'created_at' => $this->faker->date(now()),
            'updated_at' => $this->faker->date(now()),
        ];

    }
}
