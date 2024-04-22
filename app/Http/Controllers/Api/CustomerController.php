<?php

namespace App\Http\Controllers\Api;

use App\Models\Custumer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Custumer::with('contact', 'listDiff', 'campagne', 'balence', 'payement')->get();

        return response()->json($customers);
    }

    public function show($id)
    {
        $customer = Custumer::with('contact', 'listDiff', 'campagne', 'balence', 'payement')->find($id);

        return response()->json($customer);
    }
}
