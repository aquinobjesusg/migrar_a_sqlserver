<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Informe extends Model
{
    protected $table = 'informe';
    protected $primaryKey = "id";
    protected $fillable = ['nrohistoria','nroconsulta','para','descripcion','fecha','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

