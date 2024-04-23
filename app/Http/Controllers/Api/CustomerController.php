<?php

namespace App\Http\Controllers\Api;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::with('contacts', 'campagnes', 'listDiffs', 'balance', 'paiements')->get();

        return response()->json($customers);
    }

    public function show($id)
    {
        $customer = Customer::with('contacts', 'campagnes', 'listDiffs', 'balance', 'paiements')->find($id);

        return response()->json($customer);
    }
}
