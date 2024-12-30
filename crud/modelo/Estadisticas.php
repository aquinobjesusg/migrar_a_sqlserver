<?php

namespace App\Modelo;

use Illuminate\Database\Eloquent\Model;

class Estadisticas extends Model
{
    protected $table = 'estadisticas';
    protected $primaryKey = "id";
    protected $fillable = ['id','titulo','name','cantidad','created_at','updated_at','user_id'];
 
}

