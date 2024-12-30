<?php

namespace App\Modelo;

use Illuminate\Database\Eloquent\Model;

class Empresas extends Model
{
    protected $table = 'empresas';
    protected $primaryKey = "id";
    protected $fillable = ['id','code_empresa','name_empresa','created_at','updated_at'];
 
}

