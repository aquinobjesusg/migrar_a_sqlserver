<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ultra_abdominal extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'ultra_abdominal';

    protected $fillable = ['historia','consulta','fecha','transductor','referido','vesicula_bilial','higado','porta_coledoco','pancreas','rinon_derecho','rinon_izquierdo','prostata','vejiga_urina','vol_res_v_p_m','ascitis','retroperitoneo','vasos_sanguineos','otros','conclusiones','puro_texto','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

