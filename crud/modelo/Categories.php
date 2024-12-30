<?php

namespace App\Modelo;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories';
    protected $primaryKey = "id";
    protected $fillable = ['id','name','created_at','updated_at','sucursal_id'];
 
}

