<?php

namespace App\Modelo;

use Illuminate\Database\Eloquent\Model;

class Valoracion extends Model
{
    protected $table = 'valoracion';
    protected $primaryKey = "id";
    protected $fillable = ['id','valor','created_at','updated_at','user_id','sucursal_id','afiliado_id','delivery_id','empresa_id','producto_id'];
 
}

