<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reg_empl_frec_nomina extends Model
{
    protected $table = 'reg_empl_frec_nomina';
    protected $primaryKey = "id";
    protected $fillable = ['frecuencia_nomina','nombre_frecuencia','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

