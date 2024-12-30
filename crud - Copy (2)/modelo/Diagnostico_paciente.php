<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diagnostico_paciente extends Model
{
    protected $table = 'diagnostico_paciente';
    protected $primaryKey = "id";
    protected $fillable = ['nrohistoria','nroconsulta','codediagnostico','orden','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

