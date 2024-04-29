<?php

namespace App\Http\Controllers\Api;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerStoreRequest;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::with('contacts', 'campagnes', 'listDiffs', 'balance', 'paiements')->get();

        return response()->json($customers);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CustomerStoreRequest $request)
    {
        // Crée un nouveau contact avec les données validées
        $customer = Customer::create($request->validated());

        // Retourne les informations du nouvel utilisateur en JSON avec le code de statut 201
        return response()->json($customer, 201);
    }

    public function show($id)
    {
        $customer = Customer::with('contacts', 'campagnes', 'listDiffs', 'balance', 'paiements')->find($id);

        return response()->json($customer);
    }
}
