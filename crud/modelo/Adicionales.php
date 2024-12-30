<?php

namespace App\Modelo;

use Illuminate\Database\Eloquent\Model;

class Adicionales extends Model
{
    protected $table = 'adicionales';
    protected $primaryKey = "id";
    protected $fillable = ['id','name','created_at','updated_at','usercreated_at','userupdated_at','activo','sucursal_id'];
 
}

