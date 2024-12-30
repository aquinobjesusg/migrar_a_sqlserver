<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipos_conceptos extends Model
{
    protected $table = 'tipos_conceptos';
    protected $primaryKey = "id";
    protected $fillable = ['id_tipo_concepto','des_concepto','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

