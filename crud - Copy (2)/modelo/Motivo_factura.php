<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motivo_factura extends Model
{
    protected $table = 'motivo_factura';
    protected $primaryKey = "id";
    protected $fillable = ['codigo','descripcion','monto','monto_seg','tipo','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

