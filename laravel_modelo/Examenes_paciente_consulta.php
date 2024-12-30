<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Examenes_paciente_consulta extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'examenes_paciente_consulta';

    protected $fillable = ['hhistoria','hconsulta','peso','talla','urea','cr','sodio','potasio','cloro','fecha','calcio','fosforo','magnesio','paratohormona','ferritina','trasferrina','proteinuria','depuracion_creatinina','ac_urico_u','amonio','hierro_serico','folato','creatinina_u','sodio_u','potasio_u','cloro_u','fosforo_u','magnesio_u','citrato_u','oxelato_u','albumina_u','calcio_u','g_v_ph','g_v_pco2','g_v_hco3','g_v_eb','ac_urico_serico','hb','hto','hb_glicosilada','triglicerido','colesterol','creatinina_s','v_urina','creatinina_u_24','sodio_u_24','fosforo_u_24','cloro_u_24','calcio_u_24','aci_urico_u_24','potasio_u_24','oxato_u_24','citrato_u_24','ac_urico','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

