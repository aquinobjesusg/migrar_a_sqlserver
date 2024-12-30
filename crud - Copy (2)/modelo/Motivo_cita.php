<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motivo_cita extends Model
{
    protected $table = 'motivo_cita';
    protected $primaryKey = "id";
    protected $fillable = ['codigo','tipo_atencion','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

