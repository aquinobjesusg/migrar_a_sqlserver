<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motivo_cita extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'motivo_cita';

    protected $fillable = ['codigo','tipo_atencion','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

