<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'last_name' => $this->faker->lastName,
            'firstname' => $this->faker->firstName,
            'birthdate' => $this->faker->date,
            'phone_number' => $this->faker->phoneNumber,
            'city' => $this->faker->city,
            'sex' => $this->faker->randomElement(['male', 'female']),
        ];
    }
}
