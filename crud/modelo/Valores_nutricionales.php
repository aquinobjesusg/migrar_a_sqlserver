<?php

namespace App\Modelo;

use Illuminate\Database\Eloquent\Model;

class Valores_nutricionales extends Model
{
    protected $table = 'valores_nutricionales';
    protected $primaryKey = "id";
    protected $fillable = ['id','name','valor','created_at','updated_at','usercreated_at','userupdated_at','activo','sucursal_id'];
 
}

