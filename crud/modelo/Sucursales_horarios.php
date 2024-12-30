<?php

namespace App\Modelo;

use Illuminate\Database\Eloquent\Model;

class Sucursales_horarios extends Model
{
    protected $table = 'sucursales_horarios';
    protected $primaryKey = "id";
    protected $fillable = ['id','created_at','updated_at','usercreated_at','userupdated_at','sucursal_id','user_id'];
 
}

