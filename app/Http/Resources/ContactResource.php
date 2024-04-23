<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ContactResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'customer_id' => $this->customer_id,
            'last_name' => ucfirst($this->last_name),
            'firstname' => ucfirst($this->firstname),
            'birthdate' => $this->birthdate,
            'phone_number' => $this->phone_number,
            'city' => $this->city,
            'gender' => $this->gender,
        ];
    }
}
