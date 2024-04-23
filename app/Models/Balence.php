<?php

namespace App\Models;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Balence extends Model
{
    use HasFactory;

    protected $table = 'balences';

    protected $fillable = [
        'customer_id',
        'nbMessageSent',
        'nbMessagePaid',
    ];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
}
