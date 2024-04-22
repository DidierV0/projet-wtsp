<?php

namespace App\Models;

use App\Models\Modele;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Campagne extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'model_id',
        'listDiff_id',
        'name',
    ];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Custumer::class);
    }

    public function model(): HasMany
    {
        return $this->hasmany(Modele::class, 'model_id');
    }

    public function listDiff(): HasMany
    {
        return $this->hasmany(ListDiff::class, 'listDiff_id');
    }
}
