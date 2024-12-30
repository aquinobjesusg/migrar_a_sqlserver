<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registro_empleados_eje extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'registro_empleados_eje';

    protected $fillable = ['nro_nomina','descripcion','fecha_aplicacion','status','tipo_nomina','frecuencia_nomina','monto_total','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

