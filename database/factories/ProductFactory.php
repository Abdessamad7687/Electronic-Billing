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
            'name' => fake()->name(),
            'category' => fake()->name(),
            'price' => fake()->randomFloat(4, 10, 1000),
            'quantity' => fake()->randomFloat(4, 10, 1000),
            'storage'=> fake()->randomFloat(4, 10, 1000),
            'color' => fake()->name(),
            'total' => fake()->randomFloat(4, 10, 1000),
        ];
    }
}
