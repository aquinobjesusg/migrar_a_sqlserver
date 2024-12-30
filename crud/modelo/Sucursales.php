<?php

namespace App\Modelo;

use Illuminate\Database\Eloquent\Model;

class Sucursales extends Model
{
    protected $table = 'sucursales';
    protected $primaryKey = "id";
    protected $fillable = ['id','code_sucursal','name_sucursal','dineccion_sucursal','telefono_sucursal','celular_sucursal','email_afiliado','afiliado_id','created_at','updated_at','rif_sucursal','domicilio_fiscal','telefono_fiscal','codigo_postal','zona','ciudad','estado','pais','in_valido','ca_valoracion','in_abierto'];
 
}

