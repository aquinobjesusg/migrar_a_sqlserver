<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dieta_paciente extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'dieta_paciente';

    protected $fillable = ['histroria','consulta','cod_dieta','descripcion','ejecutada','calorias','dieta','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

