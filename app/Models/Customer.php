<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';

    protected $fillable = [
        'uid',
        'last_name',
        'firstname',
        'email',
        'phone_number',
        'siret',
        'company_name',
        'has_wstp_b',
        'statut',
    ];

    public function contacts(): HasMany
    {
        return $this->hasMany(Contact::class);
    }

    public function campagnes(): HasMany
    {
        return $this->hasMany(Campagne::class, 'customer_id');
    }

    public function listDiffs(): HasMany
    {
        return $this->hasMany(ListDiff::class, 'customer_id');
    }

    public function balance(): HasMany
    {
        return $this->hasMany(Balence::class, 'customer_id');
    }

    public function paiements(): HasMany
    {
        return $this->hasMany(Payement::class, 'customer_id');
    }
}
