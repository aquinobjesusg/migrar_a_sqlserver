<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imagen_consulta extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'imagen_consulta';

    protected $fillable = ['nrohistoria','nroconsulta','observacion','imagen','orden','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

