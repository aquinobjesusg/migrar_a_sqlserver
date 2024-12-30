<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Emision_pagos extends Model
{
    protected $table = 'emision_pagos';
    protected $primaryKey = "id";
    protected $fillable = ['nro_emision','fecha_emision','descripcion','cod_banco','estado','monto_pagar','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

