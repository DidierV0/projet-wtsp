<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactStoreRequest extends FormRequest
{
    public function rules()
    {
        return [
            'customer_id' => 'required',
            'last_name' => 'required|string|max:255',
            'firstname' => 'required|string|max:255',
            'birthdate' => 'required|date',
            'phone_number' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'gender' => 'required|in:male,female,other',
        ];
    }
}
