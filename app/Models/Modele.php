<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modele extends Model
{
    use HasFactory;

    protected $fillable = [
            'name',
            'text',
            'nbVar',
    ];


    public function campagne(): BelongTo
    {
        return $this->belongTo(Campagne::class, 'campagne_id');
    }
}
