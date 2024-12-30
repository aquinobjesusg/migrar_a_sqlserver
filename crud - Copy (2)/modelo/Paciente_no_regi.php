<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente_no_regi extends Model
{
    protected $table = 'paciente_no_regi';
    protected $primaryKey = "id";
    protected $fillable = ['registro','apellidos','nombres','celular','motivo','fecha','medico','registrado','hora','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

