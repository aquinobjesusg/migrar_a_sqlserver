<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reposo_paciente extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'reposo_paciente';

    protected $fillable = ['nrohistoria','nroconsulta','codereposo','fdesde','numdias','obser_reposo','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

