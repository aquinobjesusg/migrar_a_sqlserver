<?php

namespace App\Modelo;

use Illuminate\Database\Eloquent\Model;

class Metodos_pago extends Model
{
    protected $table = 'metodos_pago';
    protected $primaryKey = "id";
    protected $fillable = ['id','titulo','icono','created_at','updated_at','user_id','sucursal_id','afiliado_id','delivery_id','empresa_id'];
 
}

