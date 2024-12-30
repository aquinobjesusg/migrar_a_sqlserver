<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motivo_consulta_paciente extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'motivo_consulta_paciente';

    protected $fillable = ['codemotivo','nrohistoria','nroconsulta','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

