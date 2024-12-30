<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pre_aneste extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'pre_aneste';

    protected $fillable = ['historia','consulta','tipo','resultado','emergencia','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

