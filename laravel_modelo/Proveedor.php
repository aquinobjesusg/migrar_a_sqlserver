<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'proveedor';

    protected $fillable = ['cod_prov','proveedor','rif','direccion','telefono','contacto','celular','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

