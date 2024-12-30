<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctores extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'doctores';

    protected $fillable = ['cedula','apellidos','nombres','clinica','direccion','telefono','ciudad','nota','codeespecial','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

