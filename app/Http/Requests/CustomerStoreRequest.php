<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerStoreRequest extends FormRequest
{
    public function rules()
    {
        return [
            "uid" => "required|string|max:100",
            "email" => "required|string",
        ];
    }
}
