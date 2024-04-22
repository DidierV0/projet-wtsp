<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Balence extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nbMessageSent',
        'nbMessagePaid',
    ];


    public function custumer(): HasMany
    {
        return $this->hasmany(Custumer::class, 'custumer_id');
    }
}
