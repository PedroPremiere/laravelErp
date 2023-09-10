<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ContractsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'position' => fake()->name(),
            'salary' => fake()->randomNumber(),
            'start_date' => fake()->date(),
            'end_date' => fake()->date(),
            'holidays_per_year' => fake()->randomNumber(),
        ];
    }
}
