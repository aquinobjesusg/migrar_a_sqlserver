<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class His_con_pre_factura extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'his_con_pre_factura';

    protected $fillable = ['id_registro','numhistoria','nroconsulta','codigo','descripcion','cantidad','monto','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

