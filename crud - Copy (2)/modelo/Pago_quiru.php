<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pago_quiru extends Model
{
    protected $table = 'pago_quiru';
    protected $primaryKey = "id";
    protected $fillable = ['cod_pagos','consecuti','fecha','monto_total','abono','resta','pago','hora_pago','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

