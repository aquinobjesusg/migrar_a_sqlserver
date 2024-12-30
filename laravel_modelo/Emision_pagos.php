<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Emision_pagos extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'emision_pagos';

    protected $fillable = ['nro_emision','fecha_emision','descripcion','cod_banco','estado','monto_pagar','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

