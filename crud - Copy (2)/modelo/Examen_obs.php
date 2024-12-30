<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Examen_obs extends Model
{
    protected $table = 'examen_obs';
    protected $primaryKey = "id";
    protected $fillable = ['numhistoria','numconsulta','observacion','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

