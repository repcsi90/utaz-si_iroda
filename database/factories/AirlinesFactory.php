<?php

namespace Database\Factories;

use App\Models\airlines;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\airlines>
 */
class AirlinesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'airline_id' => fake()->unique()->randomNumber(),
            'name' => fake('hu_HU')->name(),
            'country' => fake()->country(),
            
        ];
    }
}
