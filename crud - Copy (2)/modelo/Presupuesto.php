<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Presupuesto extends Model
{
    protected $table = 'presupuesto';
    protected $primaryKey = "id";
    protected $fillable = ['cedula','nombre','direccion','telefono','nropresupuesto','fecha','cliente','nota','numhistoria','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

