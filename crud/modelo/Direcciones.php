<?php

namespace App\Modelo;

use Illuminate\Database\Eloquent\Model;

class Direcciones extends Model
{
    protected $table = 'direcciones';
    protected $primaryKey = "id";
    protected $fillable = ['id','titulo','direccion','created_at','updated_at','user_id'];
 
}

