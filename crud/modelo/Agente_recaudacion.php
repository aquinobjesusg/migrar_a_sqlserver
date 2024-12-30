<?php

namespace App\Modelo;

use Illuminate\Database\Eloquent\Model;

class Agente_recaudacion extends Model
{
    protected $table = 'agente_recaudacion';
    protected $primaryKey = "id";
    protected $fillable = ['id','codigo','nombre','created_at','updated_at'];
 
}

