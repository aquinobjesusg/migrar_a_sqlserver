<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dias_semana extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'dias_semana';

    protected $fillable = ['fecha','dia_semana','semana','ano','descripcion','tipo_dia','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

