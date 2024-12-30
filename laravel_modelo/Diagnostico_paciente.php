<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diagnostico_paciente extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'diagnostico_paciente';

    protected $fillable = ['nrohistoria','nroconsulta','codediagnostico','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

