<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motivos_consulta extends Model
{
    protected $table = 'motivos_consulta';
    protected $primaryKey = "id";
    protected $fillable = ['codemotivo','descripcion','tipo','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

