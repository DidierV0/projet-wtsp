<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'last_name',
        'firstname',
        'birthdate',
        'phone_number',
        'city',
        'sex',
    ];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function listDiffs(): BelongsToMany
    {
        return $this->belongsToMany(ListDiff::class, 'contact_list_diff', 'contact_id', 'list_diff_id')->withTimestamps();
    }
}
