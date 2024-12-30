<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reg_empl_tipo_nomina extends Model
{
    protected $table = 'reg_empl_tipo_nomina';
    protected $primaryKey = "id";
    protected $fillable = ['tipo_nomina','nombre_nomina','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

