<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'volume',
        'price',
    ];

    
    public function payment(): BelongTo
        {
            return $this->belongTo(Payment::class, 'payment_id');
        }
}
