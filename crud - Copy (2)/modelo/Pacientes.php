<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pacientes extends Model
{
    protected $table = 'pacientes';
    protected $primaryKey = "id";
    protected $fillable = ['nac','cedula','apellidos','nombres','sexo','fnacimiento','lnacimiento','codeestado','direccion','telefono','fingreso','escolaridad','ocupacion','codesegemp','numhistoria','foto_pac','profesion','email','dependencia','medico','historia_aa','categoria','sms','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

