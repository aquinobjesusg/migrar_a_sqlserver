<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Datos_grafica extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'datos_grafica';

    protected $fillable = ['historia','consulta','grosor_abdominal','indice_masa','micro_album','otro_1','otro_2','otro_3','otro_4','otro_5','otro_6','otro_7','otro_8','otro_9','otro_10','otro_11','otro_12','otro_13','otro_14','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

