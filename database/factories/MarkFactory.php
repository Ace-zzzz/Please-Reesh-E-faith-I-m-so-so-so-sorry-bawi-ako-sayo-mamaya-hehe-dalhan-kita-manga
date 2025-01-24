<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mark>
 */
class MarkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'suject_id'  => fake()->rand(1,8),
            'student_id' => fake()->rand(1,4),
            'grade'      => fake()->rand(75,99),
            'quarter'    => fake()->randomElement(['first', 'second', 'third', 'fourth']),
        ];
    }
}
