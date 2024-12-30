<?php

namespace App\Modelo;

use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    protected $table = 'brands';
    protected $primaryKey = "id";
    protected $fillable = ['id','name','category_id','created_at','updated_at'];
 
}

