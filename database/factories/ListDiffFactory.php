<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ListDiff>
 */
class ListDiffFactory extends Factory
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
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
        ];
    }
}
