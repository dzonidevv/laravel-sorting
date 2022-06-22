<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'details' => $this->faker->text(55),
            'created_at' => $this->faker->dateTimeBetween('-1 week', '+1 week'),
            'updated_at' => $this->faker->dateTimeBetween('-4 week', '+4 week'),
        ];
    }
}
