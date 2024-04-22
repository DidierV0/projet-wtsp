<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\Campagne;
use App\Models\Customer;
use App\Models\ListDiff;
use App\Models\Payement;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Créer les clients
        $customers = Customer::factory()->count(10)->create();

        // Associer des contacts aléatoires aux clients
        $customers->each(function ($customer) {
            // Générer un nombre aléatoire de contacts entre 5 et 10
            $numContacts = rand(5, 10);

            // Créer et associer chaque contact
            for ($i = 0; $i < $numContacts; $i++) {
                // Créer le contact avec customer_id défini
                $customer->contacts()->save(Contact::factory()->make());
                $customer->listDiffs()->save(ListDiff::factory()->make());
            }
        });

        // Associer des campagnes aléatoires aux clients
        $customers->each(function ($customer) {
            // Générer un nombre aléatoire de campagnes entre 5 et 10
            $numCampagne = rand(5, 10);

            // Créer et associer chaque campagne
            for ($i = 0; $i < $numCampagne; $i++) {
                // Créer la campagne avec customer_id défini
                $customer->campagnes()->save(Campagne::factory()->make());
            }
        });

        // Associer des paiements aléatoires aux clients
        $customers->each(function ($customer) {
            // Générer un nombre aléatoire de paiements entre 5 et 10
            $numPaiement = rand(5, 10);

            // Créer et associer chaque paiement
            for ($i = 0; $i < $numPaiement; $i++) {
                // Créer le paiement avec customer_id défini
                $customer->paiements()->save(Payement::factory()->make());
            }
        });

        // Créer une balance pour chaque client
        $customers->each(function ($customer) {
            // Créer la balance avec customer_id défini
            $customer->balance()->create([
                'customer_id' => $customer->id,
                'nbMessageSent' => rand(1, 10), // Nombre de messages envoyés aléatoire
                'nbMessagePaid' => rand(20, 50), // Nombre de messages payés aléatoire
            ]);
        });
    }
}
