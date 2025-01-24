<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    protected $model = Address::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_id' => Student::factory(),
            'street_name' => $this->faker->streetName,
            'barangay' => $this->faker->word,
            'municipality' => $this->faker->city,
            'province' => $this->faker->state,
            'country' => $this->faker->country,
            'zip_code' => $this->faker->postcode,
            'type' => $this->faker->randomElement(['residential', 'commercial']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
