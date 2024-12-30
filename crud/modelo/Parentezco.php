<?php

namespace App\Modelo;

use Illuminate\Database\Eloquent\Model;

class Parentezco extends Model
{
    protected $table = 'parentezco';
    protected $primaryKey = "id";
    protected $fillable = ['id','codigo','nombre','created_at','updated_at'];
 
}

