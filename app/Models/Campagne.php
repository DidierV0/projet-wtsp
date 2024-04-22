<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Campagne extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'model_id',
        'name',
    ];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function model(): BelongsTo
    {
        return $this->belongsTo(Modele::class);
    }
}
