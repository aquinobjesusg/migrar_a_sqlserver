<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipo_antecedente extends Model
{
    protected $table = 'tipo_antecedente';
    protected $primaryKey = "id";
    protected $fillable = ['codetipo','descripcion','tipoantecedente','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

