<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Contact;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
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
            // CustomerSeeder::class,
            // ProductSeeder::class,
            // ModeleSeeder::class,
        ]);

        // // Récupérer tous les clients
        // $customers = Customer::all();

        // // Créer une balence pour chaque client
        // $customers->each(function ($customer) {
        //     $customer->balance()->create([
        //         'customer_id' => $customer->id,
        //         'nbMessageSent' => rand(1, 10),
        //         'nbMessagePaid' => rand(20, 50),
        //     ]);
        // });
    }
}
