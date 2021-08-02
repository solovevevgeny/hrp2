<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;
    protected $hidden = ['created_at', 'updated_at'];
   
    public function priceTypes() 
    {
        return $this->hasOne(\App\Models\PriceType::class, 'id', 'price_type');
    }

}
