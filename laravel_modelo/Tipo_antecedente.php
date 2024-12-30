<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipo_antecedente extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'tipo_antecedente';

    protected $fillable = ['codetipo','descripcion','tipoantecedente','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

