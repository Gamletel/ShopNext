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
    public function definition(): array
    {
        return [
            'name' => $this->faker->text(50),
            'price' => $this->faker->randomFloat(2, 0, 15000),
            'discount' => $this->faker->randomFloat(2, 0, 10000),
            'description' => $this->faker->text(150),
            'quantity' => $this->faker->numberBetween(0, 15),
        ];
    }
}
