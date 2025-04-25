<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),

            'country_id'  => rand(1, 240),
            'company_id'  => rand(1, 1000),
            'position_id' => rand(1, 3),
        ];
    }
}
