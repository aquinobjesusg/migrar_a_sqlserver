<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Radiologia_paciente extends Model
{
    protected $table = 'radiologia_paciente';
    protected $primaryKey = "id";
    protected $fillable = ['nrohistoria','nroconsulta','coderadio','nroopcion','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

