<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payement extends Model
{
    use HasFactory;

    public function custumer(): HasMany
    {
        return $this->hasmany(Custumer::class, 'custumer_id');
    }


    public function product(): HasMany
    {
        return $this->hasmany(Product::class, 'product_id');
    }
}
