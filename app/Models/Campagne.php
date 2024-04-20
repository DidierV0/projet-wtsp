<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campagne extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function custumer(): HasMany
    {
        return $this->hasmany(Custumer::class, 'custumer_id');
    }


    public function model(): HasMany
    {
        return $this->hasmany(Model::class, 'model_id');
    }


    public function listDiff(): HasMany
    {
        return $this->hasmany(ListDiff::class, 'listDiff_id');
    }
}
