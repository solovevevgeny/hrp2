<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriceType extends Model
{
    use HasFactory;
    protected $hidden = ['created_at','updated_at','xml_id','id'];

}
