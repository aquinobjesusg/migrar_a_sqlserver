<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Interven_consulta extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'interven_consulta';

    protected $fillable = ['historia','consulta','codigo_inter','detalle','descripcion','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

