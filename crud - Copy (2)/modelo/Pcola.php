<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pcola extends Model
{
    protected $table = 'pcola';
    protected $primaryKey = "id";
    protected $fillable = ['atendido','conse','estado','fecha','hora_fin','hora_ini','medico','motivo','nhistoria','numorden','tipo','turno','fechac','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

