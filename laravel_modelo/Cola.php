<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cola extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'cola';

    protected $fillable = ['fecha','numhistoria','numorden','atendido','estado','turno','motivo','monto','hora_ini','hora_fin','tiempo','tipo','conse','medico','sms','sms_text','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

