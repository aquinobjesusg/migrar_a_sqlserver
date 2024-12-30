<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Examen_paciente extends Model
{
    protected $table = 'examen_paciente';
    protected $primaryKey = "id";
    protected $fillable = ['nrohistoria','nroconsulta','codeexamen','resultado','vinculante','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

