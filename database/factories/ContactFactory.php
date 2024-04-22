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
            'custumer_id' => $this->faker->numberBetween(1, 10),
            'last_name' => $this->faker->lastName(),
            'firstname' => $this->faker->firstName(),
            'birthdate' => $this->faker->date(),
            'phone_number' => $this->faker->unique()->phoneNumber(),
            'city' => $this->faker->city(),
            'sex' => $this->faker->randomElement(['homme', 'femme']),
        ];
    }
}
