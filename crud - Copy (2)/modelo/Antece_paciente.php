<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Antece_paciente extends Model
{
    protected $table = 'antece_paciente';
    protected $primaryKey = "id";
    protected $fillable = ['numhistoria','codeantecedente','detalles','descripcion','tipo','tipo2','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

