<?php

namespace App\Modelo;

use Illuminate\Database\Eloquent\Model;

class Tamano_venta extends Model
{
    protected $table = 'tamano_venta';
    protected $primaryKey = "id";
    protected $fillable = ['id','name','created_at','updated_at','usercreated_at','userupdated_at','activo','sucursal_id'];
 
}

