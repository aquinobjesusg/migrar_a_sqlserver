<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formato_print extends Model
{
    protected $table = 'formato_print';
    protected $primaryKey = "id";
    protected $fillable = ['codigo','titulo','descripcion','tipo','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

