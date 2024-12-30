<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cola extends Model
{
    protected $table = 'cola';
    protected $primaryKey = "id";
    protected $fillable = ['fecha','numhistoria','numorden','atendido','estado','turno','motivo','monto','hora_ini','hora_fin','tiempo','tipo','conse','sms','sms_text','medico','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

