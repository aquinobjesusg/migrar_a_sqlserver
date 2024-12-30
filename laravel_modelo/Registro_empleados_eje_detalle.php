<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registro_empleados_eje_detalle extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'registro_empleados_eje_detalle';

    protected $fillable = ['nro_nomina','nro_empleado','nro_cxp','monto_empleado','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

