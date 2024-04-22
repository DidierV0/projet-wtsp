<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Custumer extends Model
{
    use HasFactory;

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

    public function contact(): BelongsTo
    {
        return $this->belongsTo(Contact::class, 'contact_id');
    }

    public function listDiff(): BelongsTo
    {
        return $this->belongsTo(ListDiff::class, 'listDiff_id');
    }

    public function campagne(): BelongsTo
    {
        return $this->belongsTo(Campagne::class, 'campagne_id');
    }

    public function balence(): BelongsTo
    {
        return $this->belongsTo(Balence::class, 'balence_id');
    }

    public function payement(): BelongsTo
    {
        return $this->belongsTo(Payement::class, 'payement_id');
    }
}
