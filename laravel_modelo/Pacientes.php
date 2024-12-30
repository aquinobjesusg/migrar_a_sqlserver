<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pacientes extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'pacientes';

    protected $fillable = ['nac','cedula','apellidos','nombres','sexo','fnacimiento','lnacimiento','codeestado','direccion','telefono','fingreso','escolaridad','ocupacion','codesegemp','numhistoria','foto_pac','profesion','email','dependencia','medico','sms','dependencia_tra','cargo','tipo_emp','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

