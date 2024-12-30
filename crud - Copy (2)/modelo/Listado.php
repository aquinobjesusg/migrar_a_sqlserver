<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Listado extends Model
{
    protected $table = 'listado';
    protected $primaryKey = "id";
    protected $fillable = ['tipo','descripcion_tipo','segundo','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}

