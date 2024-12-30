<?php

namespace App\Modelo;

use Illuminate\Database\Eloquent\Model;

class Transacciones_details extends Model
{
    protected $table = 'transacciones_details';
    protected $primaryKey = "id";
    protected $fillable = ['id','name_producto','slug_producto','id_item','cantidad','totalusd','totalbs','tasa','usercreated_at','userupdated_at','created_at','updated_at','status','id_trans'];
 
}

