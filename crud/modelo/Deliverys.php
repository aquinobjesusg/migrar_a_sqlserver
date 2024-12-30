<?php

namespace App\Modelo;

use Illuminate\Database\Eloquent\Model;

class Deliverys extends Model
{
    protected $table = 'deliverys';
    protected $primaryKey = "id";
    protected $fillable = ['id','name_delivery','cedula_delivery','telefono_delivery','celular_delivery','email_delivery','nro_placa','color_vehiculo','tipo_vehiculo','created_at','updated_at','user_id','ca_valoracion'];
 
}

