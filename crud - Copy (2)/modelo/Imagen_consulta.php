<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imagen_consulta extends Model
{
    protected $table = 'imagen_consulta';
    protected $primaryKey = "id";
    protected $fillable = ['nrohistoria','nroconsulta','observacion','imagen','orden','tipo','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

