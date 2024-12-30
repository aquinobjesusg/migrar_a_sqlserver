<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctores extends Model
{
    protected $table = 'doctores';
    protected $primaryKey = "id";
    protected $fillable = ['cedula','apellidos','nombres','clinica','direccion','telefono','ciudad','nota','codeespecial','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

