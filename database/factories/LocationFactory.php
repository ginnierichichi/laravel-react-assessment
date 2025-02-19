<?php

namespace Database\Factories;

use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Location>
 */
class LocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date_start' => fake()->date(),
            'date_end' => fake()->date(),
            'status' => $this->faker->randomElement(['open', 'closed']), //Not sure if it works like this.
            'name' => fake()->name(),
            'description' => fake()->paragraph(),
        ];
    }
}
