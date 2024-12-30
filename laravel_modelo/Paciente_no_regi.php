<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente_no_regi extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'paciente_no_regi';

    protected $fillable = ['registro','apellidos','nombres','celular','motivo','fecha','medico','registrado','hora','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

