<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cuentas_x_pagar_mov extends Model
{
    protected $table = 'cuentas_x_pagar_mov';
    protected $primaryKey = "id";
    protected $fillable = ['nro_registro','nro_cxp','nro_mov','fecha_emision','nro_documento','tip_documento','monto_pagar','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

