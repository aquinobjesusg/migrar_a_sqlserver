<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Examen_paciente extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'examen_paciente';

    protected $fillable = ['nrohistoria','nroconsulta','codeexamen','resultado','vinculante','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

