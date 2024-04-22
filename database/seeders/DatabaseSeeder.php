<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Contact;
use App\Models\Custumer;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            UserSeeder::class,
        ]);

        // Créer 10 customers
        Custumer::factory(10)->create()->each(function ($customer) {
            // Pour chaque customer, créer entre 1 et 5 contacts
            $contactsCount = rand(1, 5);
            for ($i = 0; $i < $contactsCount; $i++) {
                Contact::factory()->create(['customer_id' => $customer->id]);
            }
        });
    }
}
