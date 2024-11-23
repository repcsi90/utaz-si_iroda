<?php

namespace Database\Factories;

use App\Models\flights;
use App\Models\users;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\travels>
 */
class TravelsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'flight_id' => flights::all()->random()->flight_id,
            'user_id' => users::all()->random()->user_id,
        ];
    }
}
