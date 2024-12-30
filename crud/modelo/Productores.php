<?php

namespace App\Modelo;

use Illuminate\Database\Eloquent\Model;

class Productores extends Model
{
    protected $table = 'productores';
    protected $primaryKey = "id";
    protected $fillable = ['id','codigo','nombre','created_at','updated_at'];
 
}

