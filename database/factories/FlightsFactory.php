<?php

namespace Database\Factories;

use App\Models\airlines;
use App\Models\flights;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\flights>
 */
class FlightsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'flight_id' => fake()->unique()->randomNumber(),
            'date' => fake()->date(),
            'limit' => rand(10, 200),
            'airline_id' => airlines::all()->random()->airline_id,
            
        ];
    }
}
