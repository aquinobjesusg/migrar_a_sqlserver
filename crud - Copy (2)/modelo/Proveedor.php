<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'proveedor';
    protected $primaryKey = "id";
    protected $fillable = ['cod_prov','proveedor','rif','direccion','telefono','contacto','celular','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

