<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formato_print extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'formato_print';

    protected $fillable = ['codigo','titulo','descripcion','tipo','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}

