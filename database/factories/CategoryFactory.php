<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "uuid" => fake()->uuid(),
            "category_name" => fake()->word(),
            "color" => fake()->hexColor(),
            "description" => fake()->realText(10),
        ];
    }
}
