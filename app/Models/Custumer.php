<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public function contact(): BelongTo
    {
        return $this->belongTo(Contact::class, 'contact_id');
    }


    public function listDiff(): BelongTo
    {
        return $this->belongTo(ListDiff::class, 'listDiff_id');
    }


    public function campagne(): BelongTo
    {
        return $this->belongTo(ListDiff::class, 'campagne_id');
    }
}
