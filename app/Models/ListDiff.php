<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ListDiff extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    public function custumer(): HasMany
    {
        return $this->hasmany(Custumer::class, 'custumer_id');
    }

    public function contacts(): BelongsToMany 
    {
        return $this->belongsToMany(Contact::class, 'contact_list_diffs', 'listDiff_id', 'contact_id')->withTimestamps();
    }

    public function campagne(): BelongTo
    {
        return $this->belongTo(Campagne::class, 'campagne_id');
    }
}
