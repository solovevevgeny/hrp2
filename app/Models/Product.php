<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $hidden = ['created_at', 'updated_at'];


    public function offers() {
        return $this->hasMany(\App\Models\Offer::class, 'parent_id', 'id');
    }

}
