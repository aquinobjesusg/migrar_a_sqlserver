<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class His_con_pre_factura extends Model
{
    protected $table = 'his_con_pre_factura';
    protected $primaryKey = "id";
    protected $fillable = ['id_registro','numhistoria','nroconsulta','codigo','descripcion','cantidad','monto','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

