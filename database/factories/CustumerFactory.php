<?php

namespace Database\Factories;

use App\Models\Contact;
use App\Models\Custumer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustumerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Custumer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uid' => $this->faker->uuid(),
            'last_name' => $this->faker->lastName(),
            'firstname' => $this->faker->firstName(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone_number' => $this->faker->unique()->phoneNumber(),
            'siret' => $this->faker->unique()->siret(),
            'company_name' => $this->faker->company(),
            'has_wstp_b' => $this->faker->boolean(),
            'status' => $this->faker->randomElement(['unvalidated', 'processed', 'validated']),
        ];
    }

    /**
     * Indicate that the customer should have contacts.
     *
     * @param  int|null  $count
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function withContacts($count = null)
    {
        return $this->afterCreating(function (Custumer $customer) use ($count) {
            Contact::factory()
                ->count($count ?? $this->faker->numberBetween(1, 3)) // You can adjust the count as needed
                ->create(['customer_id' => $customer->id]);
        });
    }
}
