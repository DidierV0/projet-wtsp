<?php

namespace App\Http\Controllers\Api;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ContactResource;
use App\Http\Requests\ContactStoreRequest;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // On récupère tous les contacts
        $contacts = Contact::all();

        // On retourne les contacts en JSON
        return ContactResource::collection($contacts);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContactStoreRequest $request)
    {
        // Crée un nouveau contact avec les données validées
        $contact = Contact::create($request->validated());

        // Retourne les informations du nouvel utilisateur en JSON avec le code de statut 201
        return response()->json($contact, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        // On retourne les informations du contact en JSON
        return response()->json($contact);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        // On met à jour les informations du contact
        $contact->update([
            'customer_id' => $request->customer_id,
            'last_name' => $request->last_name,
            'firstname' => $request->firstname,
            'birthdate' => $request->birthdate,
            'phone_number' => $request->phone_number,
            'city' => $request->city,
            'gender' => $request->gender,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        // On supprime le contact
        $contact->delete();

        // On retourne une réponse vide
        return response()->json(null, 204);
    }
}
