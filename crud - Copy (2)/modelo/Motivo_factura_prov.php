<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motivo_factura_prov extends Model
{
    protected $table = 'motivo_factura_prov';
    protected $primaryKey = "id";
    protected $fillable = ['id_fac_prov','des_concepto','monto','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

