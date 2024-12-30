<?php

namespace App\Modelo;

use Illuminate\Database\Eloquent\Model;

class Valoracion_usuario extends Model
{
    protected $table = 'valoracion_usuario';
    protected $primaryKey = "id";
    protected $fillable = ['id','valor','created_at','updated_at','usercreated_at','userupdated_at','sucursal_id','afiliado_id','delivery_id','empresa_id'];
 
}

