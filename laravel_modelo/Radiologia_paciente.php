<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Radiologia_paciente extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'radiologia_paciente';

    protected $fillable = ['nrohistoria','nroconsulta','coderadio','nroopcion','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

