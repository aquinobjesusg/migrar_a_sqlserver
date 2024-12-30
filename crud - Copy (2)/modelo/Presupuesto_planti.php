<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Presupuesto_planti extends Model
{
    protected $table = 'presupuesto_planti';
    protected $primaryKey = "id";
    protected $fillable = ['consecutivo','tipo_precio','total_costo','total_final','notas','tipo_doc','nom_presupuesto','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

