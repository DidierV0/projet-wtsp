<?php

namespace App\Http\Controllers\Api;

use App\Models\Modele;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ModelController extends Controller
{
    public function index()
    {
        $models = Modele::all();

        return response()->json($models);
    }

    public function show($id)
    {
        $model = Modele::find($id);

        return response()->json($model);
    }
}
