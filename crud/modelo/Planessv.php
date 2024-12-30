<?php

namespace App\Modelo;

use Illuminate\Database\Eloquent\Model;

class Planessv extends Model
{
    protected $table = 'planessv';
    protected $primaryKey = "id";
    protected $fillable = ['id','codigo','nombre','created_at','updated_at'];
 
}

