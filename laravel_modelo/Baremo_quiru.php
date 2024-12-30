<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Baremo_quiru extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'baremo_quiru';

    protected $fillable = ['consecuti','cod_inter','cod_clini','ced_paciente','nom_interven','nom_paciente','fecha_creado','fecha_opera','hora_opera','monto_opera','tipo_rol','pagada','medico_prin','medico_aux','historia','diagnostico','monto_abono','monto_resta','empre','hora_fin','duracion','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

