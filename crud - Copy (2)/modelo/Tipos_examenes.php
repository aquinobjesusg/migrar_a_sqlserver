<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipos_examenes extends Model
{
    protected $table = 'tipos_examenes';
    protected $primaryKey = "id";
    protected $fillable = ['codetipo','tipo','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

