<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Riesgo extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'riesgo';

    protected $fillable = ['sub_tipo','descripcion','puntos','clave','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

