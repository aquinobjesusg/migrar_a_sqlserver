<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Riesgo_paciente_opera extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'riesgo_paciente_opera';

    protected $fillable = ['historia','puntos','clase','conclusion','recomendaciones','nombre_intervencion','consulta','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

