<?php

namespace App\Modelo;

use Illuminate\Database\Eloquent\Model;

class Alergenos extends Model
{
    protected $table = 'alergenos';
    protected $primaryKey = "id";
    protected $fillable = ['id','name','created_at','updated_at','usercreated_at','userupdated_at','activo','sucursal_id'];
 
}

