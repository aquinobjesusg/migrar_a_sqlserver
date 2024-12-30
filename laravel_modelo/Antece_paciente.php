<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Antece_paciente extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'antece_paciente';

    protected $fillable = ['numhistoria','codeantecedente','detalles','descripcion','tipo','tipo2','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

