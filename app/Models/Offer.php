<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $hidden = ['created_at', 'updated_at'];

    public function warehouses() 
    {
        return $this->hasMany(\App\Models\Warehouse::class, 'id', 'warehouse_id');
    }

}
