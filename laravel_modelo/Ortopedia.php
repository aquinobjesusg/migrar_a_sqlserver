<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ortopedia extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'ortopedia';

    protected $fillable = ['nrohistoria','nroconsulta','botas','zapatos','soporte','thomas','normal','tacon_int','tacon_ext','suela_int','suela_ext','borde_int_rect','borde_int_abdu','suela_normal','suela_antirres','aparatos','observacion','plantilla','aae','api','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

