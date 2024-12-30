<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motivos_consulta extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'motivos_consulta';

    protected $fillable = ['codemotivo','descripcion','tipo','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

