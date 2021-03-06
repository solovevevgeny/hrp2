<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $hidden = ['created_at', 'updated_at'];

    public function warehouse() 
    {
        return $this->hasOne(\App\Models\Warehouse::class, 'id', 'warehouse_id');
    }

    public function prices() 
    {
        return $this->hasMany(\App\Models\Price::class, 'offer_id', 'id');
    }

    public function quality () 
    {
        return $this->hasOne(\App\Models\Quality::class, 'id', 'quality_id');
    }

}
