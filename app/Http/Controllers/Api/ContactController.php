<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

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
        return response()->json($contacts);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation des données de la requête
        $validator = Validator::make($request->all(), [
            'customer_id' => 'required|exists:customers,id',
            'last_name' => 'required|string|max:255',
            'firstname' => 'required|string|max:255',
            'birthdate' => 'required|date',
            'phone_number' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'sex' => 'required|in:male,female',
        ]);

        // Vérification de la validation
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        // Création d'un nouveau contact
        $contact = Contact::create([
            'customer_id' => $request->customer_id,
            'last_name' => $request->last_name,
            'firstname' => $request->firstname,
            'birthdate' => $request->birthdate,
            'phone_number' => $request->phone_number,
            'city' => $request->city,
            'sex' => $request->sex,
        ]);

        // Retourne le contact créé avec le code de statut 201
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
            'sex' => $request->sex,
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
