<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Informe extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'informe';

    protected $fillable = ['nrohistoria','nroconsulta','para','descripcion','fe_cha','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

