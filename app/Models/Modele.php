<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Modele extends Model
{
    use HasFactory;

    protected $table = 'models';

    protected $fillable = [
        'name',
        'text',
        'nbVar',
    ];

    public function campagne(): BelongsTo
    {
        return $this->belongsTo(Campagne::class);
    }
}
