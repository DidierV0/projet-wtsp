<?php

use App\Models\Custumer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\Api\ModelController;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\CustomerController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Définir les routes pour chaque ressource individuellement
Route::apiResource("users", UserController::class);
Route::apiResource('customers', CustomerController::class);
Route::apiResource('models', ModelController::class);
Route::apiResource('contacts', ContactController::class);
