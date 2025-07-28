<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\employee>
 */
class employeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' =>fake()->name(),
            'salary' => (string) fake()->numberBetween('8000','15000') . ' $',
            'role' => fake()->randomElement(['Backend Developer',
                'Frontend Developer',
                'Project Manager',
                'UI/UX Designer',
                'DevOps Engineer',
                'QA Tester',
            ]),
        ];
    }
}
