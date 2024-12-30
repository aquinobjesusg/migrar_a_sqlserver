<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Riesgo_paciente extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'riesgo_paciente';

    protected $fillable = ['historia','sub_tipo','descripcion','punto','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

