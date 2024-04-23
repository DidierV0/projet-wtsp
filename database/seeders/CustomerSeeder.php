<?php

namespace Database\Seeders;

use App\Models\Balence;
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

        // Obtenez tous les contacts et toutes les listes de diffusion
        $contacts = Contact::all();
        $lists = ListDiff::all();

        // Bouclez sur chaque contact et associez-le à une ou plusieurs listes de diffusion
        $contacts->each(function ($contact) use ($lists) {
            // Sélectionnez un nombre aléatoire de listes de diffusion pour ce contact
            $randomLists = $lists->random(rand(1, 3));

            // Attachez le contact à chaque liste de diffusion sélectionnée
            $randomLists->each(function ($list) use ($contact) {
                $contact->listDiffs()->attach($list->id);
            });
        });
    }
}
