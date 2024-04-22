<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Balence>
 */
class BalenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_id' => $this->faker->numberBetween(1, 10),
            'nbMessageSent' => $this->faker->numberBetween(1, 10),
            'nbMessagePaid' => $this->faker->numberBetween(20, 50),
        ];
    }
}
