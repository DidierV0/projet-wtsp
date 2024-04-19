<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'last_name',
        'firstname',
        'birthdate',
        'phone_number',
        'city',
        'sex',
    ];

    public function custumer(): HasMany
    {
        return $this->hasmany(Custumer::class, 'custumer_id');
    }

    public function listDiffs(): BelongsToMany 
    {
        return $this->belongsToMany(ListDiff::class, 'contact_list_diffs', 'contact_id', 'listDiff_id')->withTimestamps();
    }
}
