<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imagen_pacientes extends Model
{
    protected $table = 'imagen_pacientes';
    protected $primaryKey = "id";
    protected $fillable = ['nrohistoria','imagen','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

