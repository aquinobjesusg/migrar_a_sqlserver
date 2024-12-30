<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Especial extends Model
{
    protected $table = 'especial';
    protected $primaryKey = "id";
    protected $fillable = ['codeespecial','especialidad','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

