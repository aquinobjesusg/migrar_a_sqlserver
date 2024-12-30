<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reposo_paciente extends Model
{
    protected $table = 'reposo_paciente';
    protected $primaryKey = "id";
    protected $fillable = ['nrohistoria','nroconsulta','codereposo','fdesde','numdias','obser_reposo','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

